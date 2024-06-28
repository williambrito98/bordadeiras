<x-default-layout :title="$title">
    @include('pages.components.breadcrumb', ['title' => $title])
    @include('pages.nossa-historia.post.post', ['posts' => $posts])
    @include('pages.components.banner')
    @include('pages.components.contato')
</x-default-layout>
