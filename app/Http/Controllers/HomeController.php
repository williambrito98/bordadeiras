<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Display the home page.
     */
    public function index()
    {
        $title = 'Bordadeiras do Brasil';

        $bordadeirasImages = [];

        $bordadeirasImages[] = (object)[
            'image_url' => '/img/noticia_1.jpg',
            'title' => '‘A Arte de Bordar’ chega a Mogi Guaçu com formação gratuita para 100 mulheres',
            'site_url' => 'https://horacampinas.com.br/a-arte-de-bordar-chega-a-mogi-guacu-com-formacao-gratuita-para-100-mulheres/',
            'alt' => ''
        ];

        $bordadeirasImages[] = (object)[
            'image_url' => '/img/noticia_2.jpg',
            'title' => 'ÚLTIMOS DIAS PARA SE INSCREVER NA FORMAÇÃO GRATUITA ‘A ARTE DE BORDAR’ QUE ENSINARÁ O OFÍCIO DE BORDADEIRA PARA 100 MULHERES',
            'site_url' => 'https://oregional.net/ultimos-dias-para-se-inscrever-na-formacao-gratuita-a-arte-de-bordar-que-ensinara-o-oficio-de-bordadeira-para-100-mulheres-169179',
            'alt' => ''
        ];

        $slider = [];

        $slider[] = (object)[
            'iframe_url' => 'https://www.youtube.com/embed/KxEKK5vNs9Q?si=bOW23KusEAlZfT1X',
            'description' => '',
        ];

        $slider[] = (object)[
            'src' => '/img/Fotógrafo Gabriehl Oliveira--.JPG',
            'alt' => 'Bordadeira 1',
            'description' => 'Indaiatuba, São Paulo (2023). Foto: Gabriehl Oliveira'
        ];

        $slider[] = (object)[
            'src' => '/img/Fotógrafo Gabriehl Oliveira__-.jpg',
            'alt' => 'Bordadeira 2',
            'description' => 'Campinas, São Paulo (2023). Foto: Gabriehl Oliveira'
        ];

        $slider[] = (object)[
            'src' => '/img/Fotógrafo Niemar Silva_.jpg',
            'alt' => 'Bordadeira 2',
            'description' => 'João Monlevade, Minas Gerais (2023). Foto: Niemar Silva'
        ];

        $slider[] = (object)[
            'iframe_url' => 'https://www.youtube.com/embed/wMQIUBUjNHE?si=NUEGZn3IbZM7LuFX',
            'description' => ''
        ];


        return view('pages.home.home', compact(['title', 'bordadeirasImages', 'slider']));
    }
}
