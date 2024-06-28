<div class="subscribe-link" style="padding: 0 0 30px 0">

    @if($social_medias->email_url)
        <a href="mailto:{{ $social_medias->email_url }}" target="_Blank">
            <i class="fa fa-envelope" title="Email"></i>
        </a>
    @endif

    @if($social_medias->instagram_url)
        <a href="{{ $social_medias->instagram_url }}" target="_Blank" title="Instagram">
            <i class="fa fa-instagram"></i>
        </a>
    @endif

    @if($social_medias->facebook_url)
        <a href="{{ $social_medias->facebook_url }}" target="_Blank" title="Facebook">
            <i class="fa fa-facebook"></i>
        </a>
    @endif

    @if($social_medias->portifolio_url)
        <a href="{{ $social_medias->portifolio_url }}" target="_Blank" title="Portfólio">
            <i class="fa fa-link "></i>
        </a>
    @endif


    @if($social_medias->youtube_url)
        <a href="{{ $social_medias->youtube_url }}" target="_Blank" title="Youtube">
            <i class="fa fa-youtube"></i>
        </a>
    @endif

</div>
