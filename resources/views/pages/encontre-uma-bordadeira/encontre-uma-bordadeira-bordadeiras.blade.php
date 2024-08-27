<div class="container">
    <div class="row">
        @foreach($bordadeiras as $bordadeira)
            <div class="col-6 col-md-4 col-lg-3">
                <div class="single-post wow fadeInUp zoom" data-wow-delay="0.1s"
                     style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="post-thumb">
                        <a href="{{ route("bordadeira", ['bordadeira' => $bordadeira->nome ]) }}">
                            <img src="{{ $bordadeira->banner_url }}" class="w-18 h-18 object-cover" style="padding: 0;margin: 0;" alt=""></a>
                    </div>

                    <div class="post-content">
                        <a href="{{ route("bordadeira", ['bordadeira' => $bordadeira->nome ]) }}">
                            <h4 class="post-headline font_halftone" align="center" style="padding: 0; margin: 0 ">
                                {{ $bordadeira->nome }}
                            </h4>
                        </a>

                        <div class="post-date" align="center" style="padding: 0; margin: 0 ">
                            <a href="{{ route("bordadeira", ['bordadeira' => $bordadeira->nome ]) }}">
                                {{ $bordadeira->cidade->nome }} - {{ $bordadeira->cidade->estado->codigo_uf }}
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
