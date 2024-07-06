<div class="subscribe-link" style="padding: 0 0 30px 0">

    @if($post->email)
        <a href="mailto:{{ $post->email }}" target="_Blank">
            <i class="fa fa-envelope" title="Email"></i>
        </a>
    @endif

    @if($post->instagram)
        <a href="{{ $post->instagram }}" target="_Blank" title="Instagram">
            <i class="fa fa-instagram"></i>
        </a>
    @endif

    @if($post->facebook)
        <a href="{{ $post->facebook }}" target="_Blank" title="Facebook">
            <i class="fa fa-facebook"></i>
        </a>
    @endif

    @if($post->portifolio)
        <a href="{{ $post->portifolio }}" target="_Blank" title="Portfólio">
            <i class="fa fa-link "></i>
        </a>
    @endif

    @if($post->youtube)
        <a href="{{ $post->youtube }}" target="_Blank" title="Youtube">
            <i class="fa fa-youtube"></i>
        </a>
    @endif

</div>
