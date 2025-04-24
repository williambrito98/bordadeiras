<?php

namespace App\Http\Controllers;

use App\Models\Bordadeiras;
use App\Models\Depoimentos;
use App\Models\HomeSecao;
use App\Models\Noticias;
use App\Models\PorOndeProjetoPassou;
use DOMDocument;

class HomeController extends Controller
{
    /**
     * Display the home page.
     */
    public function index()
    {
        $title = 'Home';

        $depoimentos = Depoimentos::all();
        $bordadeiras = Bordadeiras::all();
        $noticias = Noticias::orderBy('created_at', 'desc')->get();
        $homeSecao = HomeSecao::all();
        $locais = PorOndeProjetoPassou::where('visivel', true)->orderBy('order', 'asc')->get();

        return $this->view('pages.home.home', compact(['title', 'noticias', 'depoimentos', 'bordadeiras', 'homeSecao', 'locais']));
    }
}
