<x-default-layout :title="$title">
    @include('pages.home.home-carousel')
    @include('pages.home.home-bordadeiras-do-brasil')
    @include('pages.home.home-por-onde-passou')
    @include('pages.home.home-depoimentos', ['depoimentos' => $depoimentos])
    @include('pages.home.home-bordadeiras', ['bordadeiras' => $bordadeiras])
    @include('pages.components.banner')
    @include('pages.components.contato')
</x-default-layout>
