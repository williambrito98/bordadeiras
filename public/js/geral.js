$(document).ready(function () {

    $(document).on("click", ".btnDelete", function () {
        const dataUrl = $(this).data('url');
        const idModal = $(this).data('target');
        const modal = $(idModal)
        const formModal = modal.find('form');
        formModal.attr('action', dataUrl);
        modal.modal('show');

    })

    $(document).on('change', '.select-estado', onChangeSelectEstado);

    $(document).on('submit', 'form', function () {
        showLoading();
    })
})

function showNotification(message, type = 'success') {
    if (!message) {
        return;
    }

    Toastify({
        text: message,
        duration: 3000,
        close: true,
        gravity: "top",
        position: "right",
        backgroundColor: type === 'success' ? "#4CAF50" : "#F44336",
        stopOnFocus: true,
    }).showToast();
}

// Função para mostrar o loading
function showLoading() {
    const overlay = document.getElementById('loadingOverlay');
    overlay.style.display = 'flex'; // Torna a sobreposição visível
}

// Função para ocultar o loading
function hideLoading() {
    const overlay = document.getElementById('loadingOverlay');
    overlay.style.display = 'none'; // Torna a sobreposição invisível
}

function fileUpload(id) {
    const imageUpload = document.getElementById(id);
    const isMultiple = imageUpload.multiple;
    const imagePreview = document.getElementById(`imagePreview-${id}`);
    const imagePreviewDefaultText = document.getElementById(`imagePreviewDefaultText-${id}`);
    const removeFilePreviewUploadButton = document.querySelector(`.remove-file-preview-upload-${id}`);
    const initialFiles = JSON.parse(imageUpload.getAttribute('data-initial-files'))
    const urlAdd = imageUpload.getAttribute('data-url-add');
    const urlDelete = imageUpload.getAttribute('data-url-delete');
    const enableAutoUpload = imageUpload.getAttribute('data-enable-auto-upload');
    const showInput = imageUpload.getAttribute('data-show-input');
    let inputValue = JSON.parse(imageUpload.getAttribute('data-input-value'));

    let images = initialFiles.filter(file => file).map(file => {
        addImage(file);
        return file;
    });

    if (images.length) {
        imagePreviewDefaultText.style.display = "none";
    }

    imagePreview.addEventListener('click', function (event) {
        if (event.target === imagePreview || event.target === imagePreviewDefaultText) {
            imageUpload.click();
        }
    });

    imageUpload.addEventListener('change', function () {
        const files = Array.from(this.files);


        if (!files.length) {
            removeAllImagesContainer();
            imagePreviewDefaultText.style.display = "block";
            return;
        }

        for (const file of files) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                const imgSrc = this.result;

                // Check if the image is already added
                if (!images.includes(imgSrc)) {
                    images.push(imgSrc);

                    if (!enableAutoUpload) {
                        return addImage(imgSrc);
                    }

                    const formData = new FormData();
                    formData.append("file", file);
                    $.ajax({
                        url: urlAdd,
                        type: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: formData,
                        contentType: false,
                        processData: false,
                        global: true,
                        beforeSend: function () {
                            showLoading();
                        },
                        success: function (data) {
                            addImage(data.url)
                        },
                        error: function (error) {
                            const errors = JSON.parse(error.responseText)?.errors?.file
                            errors.forEach(error => {
                                showNotification(error, 'error');
                            })
                        },
                        complete: function () {
                            hideLoading();
                        }
                    });
                }
            });

            reader.readAsDataURL(file);

        }

        if (files.length > 0) {
            imagePreviewDefaultText.style.display = "none";
        }

    });

    removeFilePreviewUploadButton?.addEventListener('click', removeFilePreview);

    function removeFilePreview(event) {
        event.stopPropagation();  // Prevent the click event from bubbling up
        const imgContainer = event.target.parentElement;
        const src = event.target.previousElementSibling.src;
        const index = +images.indexOf(src);

        if (!enableAutoUpload) {
            imgContainer.remove();
            images = images.filter(image => image !== src);

            const dataTransfer = new DataTransfer()
            for (const [i, file] of Object.entries(imageUpload.files)) {
                if (index !== +i) {
                    dataTransfer.items.add(file)
                }
            }

            imageUpload.files = dataTransfer.files

            // Show default text if no images are left
            if (images.length === 0) {
                imagePreviewDefaultText.style.display = "block";
            }

            return;
        }

        const formData = new FormData();
        formData.append("image", src);

        $.ajax({
            url: urlDelete,
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: formData,
            contentType: false,
            processData: false,
            global: true,
            beforeSend: function () {
                showLoading();
            },
            success: function () {
                imgContainer.remove();
                images = images.filter(image => image !== src);

                // Show default text if no images are left
                if (images.length === 0) {
                    imagePreviewDefaultText.style.display = "block";
                }
            },
            error: function (error) {
                console.log(error)
            },
            complete: function () {
                hideLoading();
            }
        });

    }

    function removeAllImagesContainer() {
        document.querySelectorAll(`.image-container-${id}`).forEach(imgContainer => {
            imgContainer.remove();
        });
    }


    function addImage(src) {
        if (!imageUpload.multiple) {
            removeAllImagesContainer()
        }

        const imgContainer = document.createElement('div');
        imgContainer.classList.add(`image-container`);
        imgContainer.classList.add(`image-container-${id}`);

        const img = document.createElement('img');
        img.setAttribute('src', src);

        if (urlDelete) {
            const removeButton = document.createElement('button');
            removeButton.innerText = 'X';
            removeButton.classList.add(`remove-file-preview-upload-${id}`, 'btn', 'bg-danger', 'btn-sm', 'rounded-circle');
            removeButton.type = 'button';
            removeButton.addEventListener('click', removeFilePreview)
            imgContainer.appendChild(removeButton);
        }

        imgContainer.appendChild(img);
        imagePreview.appendChild(imgContainer);

        if (showInput === 'true') {
            const input = document.createElement('input');
            input.type = 'text';
            input.name = isMultiple ? `input[]` : 'input';
            input.value = inputValue[0] ?? '';
            input.classList.add('form-control', 'mt-1')
            inputValue = inputValue.slice(1);
            input.addEventListener('change', function (e) {
                const value = e.target.value;

                const formData = new FormData();
                formData.append("file", src);
                formData.append("input", value);


                $.ajax({
                    url: urlAdd,
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: formData,
                    contentType: false,
                    processData: false,
                    global: true,
                    beforeSend: function () {
                        showLoading();
                    },
                    success: function (data) {
                        showNotification('Salvo com sucesso');
                    },
                    error: function (error) {
                        console.log(error)
                        showNotification('Erro ao salvar', 'error')
                    },
                    complete: function () {
                        hideLoading();
                    }
                });
            })
            imgContainer.appendChild(input);
        }

    }

}

function onChangeSelectEstado(e) {
    const selectEstado = $(e.target);
    const selectCidade = $('#cidade');
    const url = selectCidade.data('url-search');
    const estado = selectEstado.val();

    $.ajax({
        url: url.replace('{estado}', estado),
        type: 'GET',
        global: true,
        beforeSend: function () {
            showLoading();
        },
        success: function (data) {
            selectCidade.empty();
            data.forEach(cidade => {
                const option = document.createElement('option');
                option.value = cidade.id;
                option.innerText = cidade.nome;
                selectCidade.append(option);
            });

            selectCidade.select2({
                placeholder: 'Selecione a cidade',
                theme: 'bootstrap4',
                width: '100%'
            });

        },
        error: function (error) {
            console.log(error)
        },
        complete: function () {
            hideLoading();
        }
    });

}
