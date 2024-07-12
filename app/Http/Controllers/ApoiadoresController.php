<?php

namespace App\Http\Controllers;

class ApoiadoresController extends Controller
{
    private $title = 'Apoiadores';

    public function index()
    {

        $incentivadores = [];
        $incentivadores[] = (object)[
            'site_url' => '#',
            'logo_url' => '/img/lei-de-incentivo-a-cultura-lei-rouanet-bordadeiras-do-brasil-27-05-24-205601_1994.png'
        ];

        $patrocinadores = [];
        $patrocinadores[] = (object)[
            'site_url' => 'https://www.deere.com.br/',
            'logo_url' => '/img/ABA APOIADORES_PATROCÍNIO.png'
        ];

        $parceiros = [];
        $parceiros[] = (object)[
            'site_url' => '#',
            'logo_url' => '/img/amora-bordadeiras-do-brasil-27-05-24-204725_1977.png'
        ];

        $realizadores = [];
        $realizadores[] = (object)[
            'site_url' => '#',
            'logo_url' => '/img/ministerio-da-cultura-bordadeiras-do-brasil-28-05-24-210117_1995.png'
        ];

        $bordados = [];
        $bordados[] = (object)[
            'cidade' => (object)[
                'nome' => 'São Paulo',
                'estado' => (object)[
                    'sigla' => 'SP',
                ]
            ],
        ];


        return view('pages.apoiadores.apoiadores', [
            'title' => $this->title,
            'incentivadores' => $incentivadores,
            'patrocinadores' => $patrocinadores,
            'parceiros' => $parceiros,
            'realizadores' => $realizadores,
            'bordados' => $bordados,
        ]);
    }
}
