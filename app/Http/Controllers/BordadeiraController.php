<?php

namespace App\Http\Controllers;

use App\Models\Bordadeiras;

class BordadeiraController extends Controller
{
    public function index(Bordadeiras $bordadeira)
    {
        $title = 'Bordadeiras';

        return view('pages.bordadeiras.bordadeira', [
            'title' => $title,
            'bordadeira' => $bordadeira,
        ]);
    }

}
