<div class="swiper depoimentos">
    <div class="swiper-wrapper">
        @foreach($depoimentos as $depoimento)
            <div class="swiper-slide">
                <div class="single-post">
                    <div class="post-content">
                        <p align="center">{{ $depoimento->text }}</p>
                        <div class="post-meta d-flex">
                            <p align="center">{{ $depoimento->autor }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
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
