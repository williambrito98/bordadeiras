<?php

namespace App\Http\Controllers;

class ContatoController extends Controller
{
    private $title = 'Contato';

    public function index()
    {
        return $this->view('pages.contato.contato', [
            'title' => $this->title,
        ]);
    }
}
