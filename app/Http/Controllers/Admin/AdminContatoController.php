<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contato;
use Illuminate\Http\Request;

class AdminContatoController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contato = Contato::all()->first();

        return view('pages.admin.contato.index', compact('contato'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $contato = Contato::all()->first();
        $contato->fill($request->all());
        $contato->save();
        return $this->flashMessage('success', 'admin.contato.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
