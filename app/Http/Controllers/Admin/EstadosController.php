<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Estados;

class EstadosController extends Controller
{
    public function getCidades(Estados $estado)
    {
        return response()->json($estado->cidades);
    }
}
