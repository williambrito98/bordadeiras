<x-default-layout :title="$title">
    @include('pages.components.breadcrumb', ['title' => $title])
    <section class="archive-area section_padding_80">
        @include('pages.encontre-uma-bordadeira.encontre-uma-bordadeira-descricao', ['description' => $description])

        @include('pages.encontre-uma-bordadeira.encontre-uma-bordadeira-bordados', ['bordados' => $bordados])
    </section>

    @include('pages.components.banner')
    @include('pages.components.contato')

</x-default-layout>
