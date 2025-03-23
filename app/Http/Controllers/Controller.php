<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Contato;

abstract class Controller
{

    protected function view(string $view, array $data = [])
    {
        $contato = Contato::all()->first();
        $banner = Banner::all()->first();
        $data['contato'] = $contato;
        $data['banner'] = $banner;
        return view($view, $data);
    }
}
