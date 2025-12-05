<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="{{ $seo->description }}">
    <meta name="keywords" content="{{ $seo->keywords }}">
    <meta name="author" content="{{ $seo->author }}">
    <meta name="robots" content="{{ $seo->robots }}">
    <meta property="og:title" content="{{ $seo->og_title }}">
    <meta property="og:description" content="{{ $seo->og_description }}">
    <meta property="og:image" content="{{ $seo->og_image }}">
    <meta property="og:url" content="{{ $seo->og_url }}">
    <meta property="og:type" content="{{ $seo->og_type }}">
    <meta name="twitter:card" content="{{ $seo->twitter_card }}">
    <meta name="twitter:title" content="{{ $seo->twitter_title }}">
    <meta name="twitter:description" content="{{ $seo->twitter_description }}">
    <meta name="twitter:image" content="{{ $seo->twitter_image }}">
    <meta name="twitter:site" content="{{ $seo->twitter_site }}">

    <title>{{ $seo->title }}</title>

    <link rel="icon" href="/favicon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Jquery-2.2.4 js -->
    <script src="/js/jquery/jquery-2.2.4.min.js"></script>

    <!-- Core Stylesheet -->
    <link href="/style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="/css/responsive/responsive.css" rel="stylesheet">

    <script src="/js/swipper/swipper.min.js"></script>
    <link rel="stylesheet" href="/css/swipper/swipper.min.css" />

    <link href="/css/select2/select2.min.css" rel="stylesheet" />
    <script src="/js/select2/select2.min.js"></script>


</head>

<body class="bkg-pagina">

    <div class="bkg-pagina"></div>
    <div class="bkg-pagina2"></div>

    <header class="header_area">
        <div class="container">
            <div class="row">
                <!-- Logo Area Start -->
                <div class="col-12">
                    <div class="logo_area text-center">
                        <a href="/" class="yummy-logo">
                            <x-application-logo class="img-fluid" style="max-height: 200px" />
                        </a>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#yummyfood-nav" aria-controls="yummyfood-nav" aria-expanded="false"
                            aria-label="Toggle navigation"><i class="fa fa-bars" aria-hidden="true"></i> Menu
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
        {{ $slot }}
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
