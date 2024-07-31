<?php

namespace App\Http\Controllers;

use App\Models\Apoiadores;

class ApoiadoresController extends Controller
{
    private $title = 'Apoiadores';

    public function index()
    {

        $apoiadores = Apoiadores::all()->first();

        return $this->view('pages.apoiadores.apoiadores', [
            'title' => $this->title,
            'incentivadores' => $apoiadores->incentivadores,
            'patrocinadores' => $apoiadores->patrocinadores,
            'parceiros' => $apoiadores->parceiros,
            'realizadores' => $apoiadores->realizadores,
        ]);
    }
}
