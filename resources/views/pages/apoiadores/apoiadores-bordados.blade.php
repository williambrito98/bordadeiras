<div class="item-content-block tags" align="center">
    <x-title text="Conheça os Bordados"/>

    <div class="tags-area">
        @foreach($bordados as $bordado)
            <a href="/encontre-uma-bordadeira?cidade={{ $bordado->cidade->nome }}" style="font-size: 9px">
                <i class="fa fa-tags"></i>
                {{ $bordado->cidade->nome }} - {{ $bordado->cidade->estado->sigla }}
            </a>
        @endforeach
    </div>


</div>
