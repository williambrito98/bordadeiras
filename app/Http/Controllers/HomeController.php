<?php

namespace App\Http\Controllers;

use App\Models\Bordadeiras;
use App\Models\Depoimentos;
use App\Models\HomeSecao;
use App\Models\Noticias;

class HomeController extends Controller
{
    /**
     * Display the home page.
     */
    public function index()
    {
        $title = 'Home';

        $slider = [];

        $slider[] = (object)[
            'iframe_url' => 'https://www.youtube.com/embed/KxEKK5vNs9Q?si=bOW23KusEAlZfT1X',
            'description' => '',
        ];

        $slider[] = (object)[
            'src' => '/img/03.JPG',
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
            'src' => '/img/05.jpg',
            'alt' => 'Bordadeira 5',
            'description' => 'Ponta Grossa, Paraná (2019). Primeira turma formada pela Fernanda'
        ];

        $slider[] = (object)[
            'iframe_url' => 'https://www.youtube.com/embed/wMQIUBUjNHE?si=NUEGZn3IbZM7LuFX',
            'description' => ''
        ];

        $depoimentos = Depoimentos::all();
        $bordadeiras = Bordadeiras::all();
        $noticias = Noticias::all();
        $homeSecao = HomeSecao::all();

        return $this->view('pages.home.home', compact(['title', 'noticias', 'slider', 'depoimentos', 'bordadeiras', 'homeSecao']));
    }
}
