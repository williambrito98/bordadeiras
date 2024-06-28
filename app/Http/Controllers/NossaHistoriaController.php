<?php

namespace App\Http\Controllers;

class NossaHistoriaController extends Controller
{
    public function index()
    {
        $posts = [];

        $title = 'Nossa História';

        $posts[] = (object)[
            'title' => 'Idealizadora',
            'subtitle' => 'Fernanda Nadal',
            'content' => '<p style="font-size: 13px" align="justify">Fernanda Nadal é uma artista multifacetada, que atua como professora, empresária, mentora e escritora. Em 2019, criou o projeto Bordadeiras do Brasil, que já contemplou mais de 400 mulheres com formação na arte do bordado em pedraria. Em 2024, criou-se esta plataforma, como forma de propagar o trabalho das participantes dos cursos realizados por Fernanda, junto à pessoas e empresas interessadas na mão de obra com o bordado em pedraria.</p>',
            'img_url' => 'https://www.bordadeirasdobrasil.com.br/img/q_Rosilene-Aparecida-Mendes-bordadeiras-do-Brasil-17-06-24-134345-1999_2.jpg',
            'social_medias' => (object)[
                'facebook_url' => 'https://www.facebook.com/fernanda.nadal',
                'instagram_url' => 'https://www.instagram.com/fernandanadal/',
                'youtube_url' => 'https://www.youtube.com/channel/UC9',
                'portifolio_url' => 'https://www.bordadeirasdobrasil.com.br/',
                'email_url' => 'teste@gmail.com'
            ],
        ];


        return view('pages.nossa-historia.nossa-historia', compact('posts', 'title'));
    }
}
