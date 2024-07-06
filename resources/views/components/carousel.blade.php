<section class="welcome-post-sliders owl-carousel">
    @foreach($itens as $item)
        <div class="welcome-single-slide">
            <img src="{{ $item->image_url }}">
            <div class="project_title font_halftone">
                <a href="{{$item->site_url}}">
                    <h5 class="font_overlock" style="font-size: 18px">{{ $item->title }}</h5>
                </a>
            </div>
        </div>

    @endforeach
</section>
