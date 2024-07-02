<?php

namespace App\Http\Controllers;

class NoticiasController extends Controller
{
    private $title = 'Notícias';

    public function index()
    {
        $posts = [];

        $posts[] = (object)[
            'site_url' => 'https://www.mogiguacu.sp.gov.br/noticias/comunicacao/2040/projeto-a-arte-de-bordar-vai-oferecer-formacao-gratuita-para-100-mulheres-de-mogi-guacu.html',
            'image_url' => '/img/Fotógrafo Gabriehl Oliveira--.JPG',
            'content' => '<h2>Projeto A Arte de Bordar vai oferecer formação gratuita para 100 mulheres de Mogi Guaçu</h2><p>Mulheres a partir de 16 anos podem adquirir um novo ofício: o de bordadeira. O projeto A Arte de Bordar pelo Brasil - edição 01- ocorre pela primeira vez em Mogi Guaçu, mais especificamente no Centro Cultural.</p>'
        ];

        $posts[] = (object)[
            'site_url' => 'https://horacampinas.com.br/campinas-recebe-pela-primeira-vez-o-projeto-a-arte-de-bordar/',
            'image_url' => '/img/Fotógrafo Gabriehl Oliveira__-.jpg',
            'content' => '<h2>Campinas recebe pela primeira vez o projeto A Arte de Bordar</h2><p>Alunas da formação de bordado em pedraria com a artista Fernanda Nadal. Foto Niemar Silva/Divulgação.</p>'
        ];


        return view('pages.noticias.noticias', [
            'title' => $this->title,
            'posts' => $posts,
        ]);
    }
}
