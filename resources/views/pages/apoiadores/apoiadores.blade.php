<x-default-layout :title="$title">
    @include('pages.components.breadcrumb', ['title' => $title])

    <br>
    <br>

    @include('pages.apoiadores.apoiadores-incentivadores', ['incentivadores' => $incentivadores])
    @include('pages.apoiadores.apoiadores-patrocinadores', ['patrocinadores' => $patrocinadores])
    @include('pages.apoiadores.apoiadores-parceiros', ['parceiros' => $parceiros])
    @include('pages.apoiadores.apoiadores-realizadores', ['realizadores' => $realizadores])
    @include('pages.apoiadores.apoiadores-bordados', ['bordados' => $bordados])
    @include('pages.components.link-destacado', [
    'url' => 'https://www.projetosestrategicos.com.br/contato.php',
    'text' => 'Clique aqui para saber como investir neste projeto'
    ])

    @include('pages.components.banner')
    @include('pages.components.contato')
</x-default-layout>
