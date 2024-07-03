<x-default-layout :title="$title">
    @include('pages.components.breadcrumb', ['title' => $title])
    @include('pages.nossa-historia.post.post', ['posts' => $posts])
    @include('pages.components.link-destacado', [
    'url' => 'https://www.projetosestrategicos.com.br/contato.php',
    'text' => 'Clique aqui para saber como investir neste projeto'
    ])
    @include('pages.components.banner')
    @include('pages.components.contato')
</x-default-layout>
