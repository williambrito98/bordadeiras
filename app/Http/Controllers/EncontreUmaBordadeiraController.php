<?php

namespace App\Http\Controllers;

use App\Models\Bordadeiras;

class EncontreUmaBordadeiraController extends Controller
{
    public function index()
    {

        $title = 'Encontre uma Bordadeira';
        $description = '<p style="font-size: 16px" align="justify">Na aba da Plataforma “Encontre uma bordadeira” a pessoa ou empresa interessada em contratar serviço de bordado em pedrarias poderá acessar as bordadeiras cadastradas através dos seus contatos e redes sociais, além de conhecer um pouco da história de cada uma.<br><br></p>';

        $bordadeiras = Bordadeiras::all();

        return view('pages.encontre-uma-bordadeira.encontre-uma-bordadeira', compact('title', 'description', 'bordadeiras'));
    }
}
