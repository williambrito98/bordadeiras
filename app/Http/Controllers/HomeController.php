<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page.
     */
    public function index()
    {
        $title = 'Bordadeiras do Brasil';

        $bordadeirasImages = [];

        $bordadeirasImages[] = (object) [
            'src' => '/img/q_Rosilene-Aparecida-Mendes-bordadeiras-do-Brasil-17-06-24-134345-1999_2.jpg',
            'alt' => 'Bordadeira 1',
        ];

        $bordadeirasImages[] = (object) [
            'src' => '/img/q_Lilian-Regina-Borges-Peres-Itaya-bordadeiras-do-Brasil-17-06-24-133442-1998_2.jpg',
            'alt' => 'Bordadeira 2',
        ];

        $slider = [];

        $slider[] = (object) [
            'src' => '/img/Fotógrafo Gabriehl Oliveira--.JPG',
            'alt' => 'Bordadeira 1',
        ];

        $slider[] = (object) [
            'src' => '/img/Fotógrafo Gabriehl Oliveira__-.jpg',
            'alt' => 'Bordadeira 2',
        ];

        $slider[] = (object) [
            'src' => '/img/Fotógrafo Niemar Silva_.jpg',
            'alt' => 'Bordadeira 2',
        ];

        $slider[] = (object) [
            'iframe_url' => 'https://www.youtube.com/embed/KxEKK5vNs9Q?si=MN6FY-fTp0f7v2id',
        ];

        $slider[] = (object) [
            'iframe_url' => 'https://www.youtube.com/embed/wMQIUBUjNHE?si=NUEGZn3IbZM7LuFX',
        ];


        return view('pages.home.home', compact(['title', 'bordadeirasImages', 'slider']));
    }
}
