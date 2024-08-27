<x-default-layout :title="$title">
    @include('pages.components.breadcrumb', ['title' => $bordadeira->nome])

    <section class="single_blog_area section_padding_80">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="row no-gutters">
                        <div class="col-12 col-sm-12">
                            <div class="single-post">
                                <div class="post-content">
                                    @include('pages.components.gallery', ['itens' => $bordadeira->images])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-4">
                    <div class="blog-sidebar mt-5 mt-lg-0">
                        <div class="single-widget-area about-me-widget text-center">
                            <div class="widget-title">
                                <h6>Bordadeira</h6>
                            </div>
                            <div class="about-me-widget-thumb">
                                <img src="{{ $bordadeira->thumbnail_url }}" alt="">
                            </div>
                            <h4 class="font-shadow-into-light">
                                {{ ucwords($bordadeira->nome) }}
                            </h4>
                            <p class="bordadeira_texto">
                                {{ $bordadeira->content }}
                            </p>

                            <div class="subscribe-link">
                                @if($bordadeira->whatsapp)
                                    <a href="https://wa.me/{{ $bordadeira->whatsapp }}?text=ol%C3%A1,%20encontrei%20seu%20bordado%20no%20site%20Bordados%20do%20Brasil:" target="_blank">
                                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                    </a>
                                @endif

                                @if($bordadeira->instagram)
                                    <a href="https://www.instagram.com/{{ $bordadeira->instagram }}" target="_blank">
                                        <i class="fa fa-instagram" aria-hidden="true"></i>
                                    </a>

                                @endif

                                @if($bordadeira->facebook)
                                    <a href="{{ $bordadeira->facebook }}" target="_blank">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                @endif

                                @if($bordadeira->youtube)
                                    <a href="{{ $bordadeira->youtube }}" target="_blank">
                                        <i class="fa fa-youtube" aria-hidden="true"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('pages.components.banner')
    @include('pages.components.contato')

</x-default-layout>
