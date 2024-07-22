<x-title text="Contato"/>

<div class="social_icon_area clearfix">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="footer-social-area d-flex" style="padding: 60px 0 100px 0">
                    <div class="single-icon">
                        <a href="https://wa.me/+55{{ $contato->whatsapp ?? '' }}?text=ol%C3%A1,%20 estou entrando em contato pelo site do Bordadeiras do Brasil"
                           target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i><span>Whatsapp</span></a>
                    </div>
                    <div class="single-icon">
                        <a href="{{ $contato->youtube ?? '' }}" target="_blank">
                            <i class="fa fa-youtube" aria-hidden="true"></i><span>Youtube</span></a>
                    </div>
                    <div class="single-icon">
                        <a href="{{ $contato->facebook ?? '' }}" target="_blank"><i
                                class="fa fa-facebook" aria-hidden="true"></i><span>Facebook</span></a>
                    </div>
                    <div class="single-icon">
                        <a href="{{ $contato->instagram }}" target="_blank">
                            <i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></a>
                    </div>

                    <div class="single-icon">
                        <a href="mailto:{{ $contato->email }}" target="_blank">
                            <i class="fa fa-envelope-o"
                               aria-hidden="true"></i><span>Email</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
