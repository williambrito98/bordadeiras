<?php

namespace App\Http\Controllers;

use App\Models\Noticias;

class NoticiasController extends Controller
{
    private $title = 'Notícias';

    public function index()
    {
        $noticias = Noticias::orderBy('id', 'desc')->get();


        return $this->view('pages.noticias.noticias', [
            'title' => $this->title,
            'noticias' => $noticias,
        ]);
    }
}
