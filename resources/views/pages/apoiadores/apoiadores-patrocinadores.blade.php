<x-title text="Patrocinadores"/>
<div class="container">
    <div class="row" style="justify-content: center;align-items: center;">
        @foreach($patrocinadores as $patrocinador)
            <div class="col-12" align="center">
                <div class="single-post wow fadeInUp" data-wow-delay="0.1s"
                     style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                    <div class="">
                        <a href="{{$patrocinador['site_url']}}" target="_blank">
                            <img src="{{$patrocinador['logo_url']}}" style=" padding: 0; margin: 0; width: 100%; height: auto; object-fit: contain;" alt="">
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
