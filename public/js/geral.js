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
    const imagePreview = document.getElementById(`imagePreview-${id}`);
    const imagePreviewDefaultText = document.getElementById(`imagePreviewDefaultText-${id}`);
    const removeFilePreviewUploadButton = document.querySelector(`.remove-file-preview-upload-${id}`);
    const initialFiles = JSON.parse(imageUpload.getAttribute('data-initial-files'))
    const urlAdd = imageUpload.getAttribute('data-url-add');
    const urlDelete = imageUpload.getAttribute('data-url-delete');

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

    imageUpload.addEventListener('change', function (e) {
        const files = Array.from(this.files);

        for (const file of files) {
            const reader = new FileReader();
            reader.addEventListener('load', function () {
                const imgSrc = this.result;

                // Check if the image is already added
                if (!images.includes(imgSrc)) {
                    images.push(imgSrc);

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
                            console.log(error)
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
        let src = event.target.previousElementSibling.src;

        $.ajax({
            url: urlDelete,
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                image: src
            },
            contentType: false,
            processData: false,
            global: true,
            beforeSend: function () {
                showLoading();
            },
            success: function (data) {
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


    function addImage(src) {
        if (!imageUpload.multiple) {
            document.querySelectorAll(`.image-container-${id}`).forEach(imgContainer => {
                imgContainer.remove();
            });
        }

        const imgContainer = document.createElement('div');
        imgContainer.classList.add(`image-container`);
        imgContainer.classList.add(`image-container-${id}`);

        const img = document.createElement('img');
        img.setAttribute('src', src);

        const removeButton = document.createElement('button');
        removeButton.innerText = 'X';
        removeButton.classList.add(`remove-file-preview-upload-${id}`, 'btn', 'bg-danger', 'btn-sm', 'rounded-circle');
        removeButton.type = 'button';
        removeButton.addEventListener('click', removeFilePreview)

        imgContainer.appendChild(img);
        imgContainer.appendChild(removeButton);
        imagePreview.appendChild(imgContainer);

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
