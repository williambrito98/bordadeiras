<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\AdminDepoimentoRequest;
use App\Models\Depoimentos;

class AdminDepoimentosController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $depoimentos = Depoimentos::all();

        return view('pages.admin.depoimentos.index', [
            'depoimentos' => $depoimentos
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.depoimentos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminDepoimentoRequest $request)
    {
        Depoimentos::create($request->validated());
        return $this->flashMessage('success', 'admin.depoimentos.index');
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
    public function edit(Depoimentos $depoimento)
    {
        return view('pages.admin.depoimentos.edit', [
            'depoimento' => $depoimento
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdminDepoimentoRequest $request, Depoimentos $depoimento)
    {
        $depoimento->update($request->validated());

        return $this->flashMessage('success', 'admin.depoimentos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Depoimentos $depoimento)
    {
        $depoimento->delete();

        return redirect()->route('admin.depoimentos.index');
    }
}
