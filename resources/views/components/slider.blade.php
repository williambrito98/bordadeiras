@php
    use Illuminate\Support\Str;
    $randomClassCss = preg_replace('/[0-9]/', '', Str::random(10));

@endphp

<div class="swiper {{ $randomClassCss }}">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
        @foreach($itens as $item)
            <!-- Slides -->
            <div class="swiper-slide">
                @isset($item->iframe_url)
                    <iframe src="{{ $item->iframe_url }}"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                @else
                    <img src="{{ $item->src }}" alt="{{ $item->alt }}">
                @endisset
            </div>
        @endforeach
    </div>
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

</div>


<script>
    new Swiper('.{{ $randomClassCss }}', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });
</script>
