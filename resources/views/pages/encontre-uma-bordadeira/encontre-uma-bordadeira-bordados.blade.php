<div class="container">
    <div class="row">
        @foreach($bordados as $bordado)
            <div class="col-6 col-md-4 col-lg-3">
                <div class="single-post wow fadeInUp zoom" data-wow-delay="0.1s"
                     style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="post-thumb">
                        <a href="{{ $bordado->link }}">
                            <img src="{{ $bordado->img_url }}" style="padding: 0;margin: 0;" alt=""></a>
                    </div>

                    <div class="post-content">
                        <a href="{{ $bordado->link }}">
                            <h4 class="post-headline font_halftone" align="center" style="padding: 0; margin: 0 ">
                                {{ $bordado->bordadeira_nome }}
                            </h4>
                        </a>

                        <div class="post-date" align="center" style="padding: 0; margin: 0 ">
                            <a href="{{ $bordado->link }}">
                                {{ $bordado->cidade->nome }} - {{ $bordado->cidade->estado->sigla }}
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
