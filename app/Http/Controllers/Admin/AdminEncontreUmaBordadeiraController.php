<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\EncontreUmaBordadeira;
use Illuminate\Http\Request;

class AdminEncontreUmaBordadeiraController extends BaseController
{

    public function index()
    {
        $encontreUmaBordadeira = EncontreUmaBordadeira::all()->first();
        return view('pages.admin.encontre-uma-bordadeira.index', compact('encontreUmaBordadeira'));
    }

    public function update(Request $request, EncontreUmaBordadeira $encontreUmaBordadeira)
    {
        $encontreUmaBordadeira->update($request->all());
        return $this->flashMessage('success', 'admin.encontre-uma-bordadeira.index');
    }
}
