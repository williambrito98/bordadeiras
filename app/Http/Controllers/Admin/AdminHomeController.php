<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\AdminUpdateHomeRequest;
use App\Models\HomeSecao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminHomeController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $homeSecao = HomeSecao::all();
        return view('pages.admin.home.index', compact('homeSecao'));
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
        //
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
    public function update(AdminUpdateHomeRequest $request)
    {
        $data = $request->validated();

        try {

            DB::transaction(function () use ($data) {
                foreach ($data['id'] as $key => $id) {
                    $homeSecao = HomeSecao::find($id);
                    $homeSecao->update([
                        'titulo' => $data['titulo'][$key],
                        'conteudo' => $data['conteudo'][$key],
                    ]);
                }
            });

            return $this->flashMessage('success', 'admin.home.update');

        } catch (\Exception $th) {
            Log::error($th->getMessage());
            return $this->flashMessage('error', 'admin.home.update');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
