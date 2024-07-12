<x-default-layout :title="$title">
    @include('pages.components.breadcrumb', ['title' => $title])

    <br>
    <br>

    @include('pages.apoiadores.apoiadores-incentivadores', ['incentivadores' => $incentivadores])
    @include('pages.apoiadores.apoiadores-patrocinadores', ['patrocinadores' => $patrocinadores])
    @include('pages.apoiadores.apoiadores-parceiros', ['parceiros' => $parceiros])
    @include('pages.apoiadores.apoiadores-realizadores', ['realizadores' => $realizadores])
    @include('pages.components.link-destacado', [
    'url' => 'https://www.projetosestrategicos.com.br/contato.php',
    'text' => 'Saiba como levar este projeto para a sua cidade, clicando aqui'
    ])

    @include('pages.components.banner')
    @include('pages.components.contato')
</x-default-layout>
