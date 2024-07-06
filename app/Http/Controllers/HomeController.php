<?php

namespace App\Http\Controllers;

use App\Models\Bordadeiras;
use App\Models\Depoimentos;
use App\Models\Noticias;

class HomeController extends Controller
{
    /**
     * Display the home page.
     */
    public function index()
    {
        $title = 'Home';

        $noticias = Noticias::all();

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

        $depoimentos = Depoimentos::all();

        $bordadeiras = Bordadeiras::all();

        return view('pages.home.home', compact(['title', 'noticias', 'slider', 'depoimentos', 'bordadeiras']));
    }
}
