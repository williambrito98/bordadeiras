<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_TITLE') }} {{ $title ? ' - ' . $title : '' }}</title>

    <link rel="icon" href="favicon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="/css/responsive/responsive.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Jquery-2.2.4 js -->
    <script src="/js/jquery/jquery-2.2.4.min.js"></script>

</head>
<body class="bkg-pagina">

<div class="bkg-pagina"></div>
<div class="bkg-pagina2"></div>

<div id="preloader">
    <div class="yummy-load"></div>
</div>

<header class="header_area">
    <div class="container">
        <div class="row">
            <!-- Logo Area Start -->
            <div class="col-12">
                <div class="logo_area text-center">
                    <a href="/" class="yummy-logo">
                        <x-application-logo class="img-fluid" style="max-height: 200px"/>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <nav class="navbar navbar-expand-lg">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#yummyfood-nav"
                            aria-controls="yummyfood-nav" aria-expanded="false" aria-label="Toggle navigation"><i
                                class="fa fa-bars" aria-hidden="true"></i> Menu
                    </button>
                    <!-- Menu Area Start -->
                    <div class="collapse navbar-collapse justify-content-center" id="yummyfood-nav">
                        <ul class="navbar-nav" id="yummy-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="/home">Home </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/nossa-historia">Nossa História</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/encontre-uma-bordadeira">Encontre uma Bordadeira</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/apoiadores">Apoiadores</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/noticias">Notícias</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/contato">Contato</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>

<main>
    {{$slot}}
</main>


<!-- Popper js -->
<script src="/js/bootstrap/popper.min.js"></script>
<!-- Bootstrap-4 js -->
<script src="/js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins JS -->
<script src="/js/others/plugins.js"></script>
<!-- Active JS -->
<script src="/js/active.js"></script>

</body>
</html>
