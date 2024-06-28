<x-default-layout :title="$title">
    @include('pages.components.breadcrumb', ['title' => $title])

    @include('pages.contato.contato-social-medias')
</x-default-layout>
