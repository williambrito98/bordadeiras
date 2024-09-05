<?php

namespace App\Http\Controllers;

use App\Models\Bordadeiras;
use App\Models\EncontreUmaBordadeira;

class EncontreUmaBordadeiraController extends Controller
{
    public function index()
    {

        $title = 'Encontre uma Bordadeira';
        $encontreUmaBordadeira = EncontreUmaBordadeira::all()->first();
        $description = $encontreUmaBordadeira->description;

        $bordadeiras = Bordadeiras::all();


        return $this->view('pages.encontre-uma-bordadeira.encontre-uma-bordadeira', compact(['title', 'description', 'bordadeiras']));
    }
}
