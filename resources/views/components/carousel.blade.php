<section class="welcome-post-sliders owl-carousel">
    @foreach($itens as $item)
        <div class="welcome-single-slide">
            <img src="{{ $item->src }}" alt="{{ $item->alt }}">
            @isset($item->description)
                <div class="project_title font_halftone">
                    <a href="/">
                        <h5 class="font_overlock" style="font-size: 18px">{{ $item->description }}</h5>
                    </a>
                </div>
            @endisset
        </div>

    @endforeach
</section>
