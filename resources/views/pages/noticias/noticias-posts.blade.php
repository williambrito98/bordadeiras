@foreach($noticias as $noticia)
    <div class="noticia zoom">
        <a href="{{ $noticia->site_url }}" target="_blank">
            <img src="{{ $noticia->image_url }}" alt="">
            <div class="conteudo">
                <h2>{{ $noticia->title }}</h2>
                {!! $noticia->subtitle !!}
            </div>
        </a>
    </div>
@endforeach

