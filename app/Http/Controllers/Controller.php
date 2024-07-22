<?php

namespace App\Http\Controllers;


use App\Models\Contato;

abstract class Controller
{

    protected function view(string $view, array $data = [])
    {
        $contato = Contato::all()->first();
        $data['contato'] = $contato;
        return view($view, $data);
    }


}
