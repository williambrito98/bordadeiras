<br/>
<br/>
<br/>

<div class="container">
    <div class="row ">
        @foreach($posts as $post)
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <div class="blog-sidebar mt-5 mt-lg-0">
                    <div class="single-widget-area about-me-widget text-center">
                        <x-title :text="$post->title"/>
                        @include('pages.nossa-historia.post.post-image', ['img_url' => $post->img_url])

                        <h4 class="font-shadow-into-light" style="font-size: 30px">
                            {{ $post->subtitle }}
                        </h4>

                        @include('pages.nossa-historia.post.post-social-medias', ['social_medias' => $post->social_medias])

                        {!! $post->content !!}
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
