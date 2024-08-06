<x-default-layout>
    @include('pages.home.home-carousel')
    @include('pages.home.home-secao', ['homeSecao' => $homeSecao])
    @include('pages.home.home-por-onde-passou')
    @include('pages.home.home-depoimentos', ['depoimentos' => $depoimentos])
    @include('pages.home.home-bordadeiras', ['bordadeiras' => $bordadeiras])
    @include('pages.components.banner')
    @include('pages.components.contato', ['contato' => $contato])
</x-default-layout>
