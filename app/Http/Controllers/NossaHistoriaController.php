<?php

namespace App\Http\Controllers;

use App\Models\NossaHistoria;

class NossaHistoriaController extends Controller
{
    public function index()
    {
        $title = 'Nossa História';

        $posts = NossaHistoria::all();


        return $this->view('pages.nossa-historia.nossa-historia', compact(['title', 'posts']));
    }
}
