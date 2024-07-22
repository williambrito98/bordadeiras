<?php

namespace App\Http\Controllers\Admin;

use App\Models\Estados;

class EstadosController extends BaseController
{
    public function getCidades(Estados $estado)
    {
        return response()->json($estado->cidades);
    }
}
