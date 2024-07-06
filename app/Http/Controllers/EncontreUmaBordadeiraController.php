<?php

namespace App\Http\Controllers;

use App\Models\Bordadeiras;

class EncontreUmaBordadeiraController extends Controller
{
    public function index()
    {

        $title = 'Encontre uma Bordadeira';
        $description = '<p style="font-size: 16px" align="justify">Nessa aba você encontra o bordado realizado através de um traço pré-determinado, realizado pelas alunas que fizeram o curso a arte de bordar em pedrarias com a Fernanda Nadal e foram bem avaliadas por ela, bem como imagens de alguns outros trabalhos já desenvolvidos pela aluna, caso tenham. É possível acessar o contato e conversar diretamente com cada uma delas, clicando nas imagens abaixo.<br><br>Caso você tenha dúvidas sobre qual bordadeira contatar para a sua demanda, é possível contatar a própria Fernanda Nadal, através do seu email, disponível nesta plataforma.<br><br></p>';

        $bordadeiras = Bordadeiras::all();

        return view('pages.encontre-uma-bordadeira.encontre-uma-bordadeira', compact('title', 'description', 'bordadeiras'));
    }
}
