<?php

namespace App\Http\Controllers;

use App\Models\Noticias;

class NoticiasController extends Controller
{
    private $title = 'Notícias';

    public function index()
    {
        $noticias = Noticias::all();

        return view('pages.noticias.noticias', [
            'title' => $this->title,
            'noticias' => $noticias,
        ]);
    }
}
