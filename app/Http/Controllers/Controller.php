<?php

namespace App\Http\Controllers;


use App\Models\Contato;
use App\Models\Seo;

abstract class Controller
{

    protected function view(string $view, array $data = [])
    {
        $contato = Contato::all()->first();
        $data['contato'] = $contato;
        $seo = Seo::all()->first();
        $data['seo'] = $seo;
        return view($view, $data);
    }


}
