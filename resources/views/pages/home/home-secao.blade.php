@foreach($homeSecao as $secao)

    <section class="archive-area section_padding_80">
        <x-title :text="$secao->titulo"/>
        <div class="container">
            <div class="col-12">
                <div class="single-post d-sm-flex wow fadeInUpBig"
                     style="visibility: visible; animation-name: fadeInUpBig;">
                    <div class="post-content">
                        {!! $secao->conteudo !!}
                    </div>
                </div>
            </div>

        </div>
    </section>
@endforeach


@include('pages.components.link-destacado', [
'url' => 'https://www.projetosestrategicos.com.br/contato.php',
'text' => 'Saiba como levar este projeto para a sua cidade, clicando aqui'
])
