<x-default-layout :title="$title">
    @include('pages.components.breadcrumb', ['title' => $title])

    <section class="archive-area section_padding_80">
        <div class="item-content-block tags" align="center">
            <x-title text="Notícias"/>
        </div>

        <div class="noticias">
            @include('pages.noticias.noticias-posts', ['noticias' => $noticias])
        </div>
    </section>

    @include('pages.components.banner')
    @include('pages.components.contato')

</x-default-layout>
