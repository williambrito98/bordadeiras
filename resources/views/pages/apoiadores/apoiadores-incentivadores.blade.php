<div class="container">
    <div class="row">
        @foreach($incentivadores as $incentivador)
            <div class="col-6 col-md-4 col-lg-3" align="center">
                <div class="single-post wow fadeInUp" data-wow-delay="0.1s"
                     style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="post-thumb">
                        <a href="{{$incentivador->site_url}}" target="_blank">
                            <img src="{{$incentivador->logo_url}}" style=" padding: 0; margin: 0; " alt="">
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
