<?php

namespace App\Http\Controllers;

class EncontreUmaBordadeiraController extends Controller
{
    public function index()
    {

        $title = 'Encontre uma Bordadeira';
        $description = '<p style="font-size: 16px" align="justify">Nessa aba você encontra o bordado das alunas que fizeram a formação com a Fernanda Nadal e foram bem avaliadas por ela. É possível acessar o contato e conversar diretamente com cada uma delas, clicando nas imagens abaixo.</p>';

        $bordados = [];

        $bordados[] = (object)[
            'link' => 'https://www.instagram.com/p/CQ1J9J6j6Zv/',
            'img_url' => '/img/q_Rosilene-Aparecida-Mendes-bordadeiras-do-Brasil-17-06-24-134345-1999_2.jpg',
            'bordadeira_nome' => 'Ana Amaral',
            'cidade' => (object)[
                'nome' => 'São Paulo',
                'estado' => (object)[
                    'sigla' => 'SP',
                ]
            ]
        ];

        $bordados[] = (object)[
            'link' => 'https://www.instagram.com/p/CQ1J9J6j6Zv/',
            'img_url' => '/img/q_Lilian-Regina-Borges-Peres-Itaya-bordadeiras-do-Brasil-17-06-24-133442-1998_2.jpg',
            'bordadeira_nome' => 'Lilian Regina Borges Peres',
            'cidade' => (object)[
                'nome' => 'Rio Grande do Sul',
                'estado' => (object)[
                    'sigla' => 'RS',
                ]
            ]
        ];


        return view('pages.encontre-uma-bordadeira.encontre-uma-bordadeira', compact('title', 'description', 'bordados'));
    }
}
