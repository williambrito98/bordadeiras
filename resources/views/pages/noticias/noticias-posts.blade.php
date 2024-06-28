@foreach($posts as $post)
    <div class="noticia zoom">
        <a href="{{ $post->site_url }}">
            <img src="{{ $post->image_url }}" alt="Imagem da Notícia 1">
            <div class="conteudo">
                {!! $post->content !!}
            </div>
        </a>
    </div>
@endforeach

