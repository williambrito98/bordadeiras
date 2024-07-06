<?php

namespace App\Http\Controllers;

use App\Models\NossaHistoria;

class NossaHistoriaController extends Controller
{
    public function index()
    {
        $title = 'Nossa História';

        $posts = NossaHistoria::all();

        return view('pages.nossa-historia.nossa-historia', compact('posts', 'title'));
    }
}
