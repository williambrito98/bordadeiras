<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\AdminStoreNoticiasRequest;
use App\Http\Requests\Admin\AdminUpdateNoticiasRequest;
use App\Http\Requests\Admin\UploadThumbnailRequest;
use App\Models\Noticias;

class AdminNoticiasController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $noticias = Noticias::orderBy('id', 'desc')->get();
        return view('pages.admin.noticias.index', compact('noticias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.noticias.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminStoreNoticiasRequest $request)
    {

        $imageUrl = $this->upload('local', $request, 'image_url');

        if (!$imageUrl) {
            return $this->flashMessage('error', 'admin.noticias.create');
        }

        $data = $request->validated();
        $data['image_url'] = $imageUrl;
        $data['user_id'] = auth()->user()->id;

        Noticias::create($data);

        return $this->flashMessage('success', 'admin.noticias.index');

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
    public function edit(Noticias $noticia)
    {
        return view('pages.admin.noticias.edit', compact('noticia'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdminUpdateNoticiasRequest $request, Noticias $noticia)
    {
        $data = $request->validated();

        $noticia->update($data);

        return $this->flashMessage('success', 'admin.noticias.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Noticias $noticia)
    {
        $noticia->delete();
        return $this->flashMessage('success', 'admin.noticias.index');
    }

    public function uploadBanner(Noticias $noticia, UploadThumbnailRequest $request)
    {
        $fileUrl = $this->upload('local', $request);
        if (!$fileUrl) {
            return response()->json(['error' => 'Upload falhou'], 500);
        }
        $noticia->image_url = $fileUrl;
        $noticia->save();
        return response()->json(['url' => $fileUrl], 200);
    }
}
