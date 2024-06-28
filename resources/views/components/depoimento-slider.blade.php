<div class="swiper depoimentos">
    <div class="swiper-wrapper">
        <div class="swiper-slide">
            <div class="single-post">
                <div class="post-content">
                    <p align="center">"E essa oficina oferece pra gente a possibilidade de rever aquilo que a
                        gente tem, modificar e ter uma peça nova e usar ela por mais tempo sem precisar estar
                        agredindo o meio ambiente"</p>
                    <div class="post-meta d-flex">
                        <p align="center">Cláudia Beatris Teixeira – Aluna do curso em Montenegro/RS.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="single-post">
                <div class="post-content">
                    <p align="center">"O projeto A Arte de Bordar traz muito desse viés de empreendedorismo, de
                        contribuição social porque ele ensina, ele transfere o conhecimento para as mulheres, e
                        esse conhecimento será certamente revertido, transformado, em oportunidade de geração de
                        renda futuramente depois que o projeto sai e esse conhecimento fica para as
                        participantes do projeto."</p>
                    <div class="post-meta d-flex">
                        <p align="center">Lucas Vilela – Comunicação ArcelorMittal</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- If we need navigation buttons -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>


<script>
    new Swiper(".depoimentos", {
        direction: 'horizontal',
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });

</script>
