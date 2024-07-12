<x-default-layout :title="$title">
    @include('pages.components.breadcrumb', ['title' => $title])
    @include('pages.components.link-destacado', [
        'url' => 'https://www.projetosestrategicos.com.br/contato.php',
        'text' => 'Saiba como levar este projeto para a sua cidade, clicando aqui.'
    ])
    @include('pages.contato.contato-social-medias')
</x-default-layout>
