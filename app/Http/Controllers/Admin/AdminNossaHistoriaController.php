<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\AdminUpdateNossaHistoriaRequest;
use App\Http\Requests\Admin\UploadThumbnailRequest;
use App\Models\NossaHistoria;
use Illuminate\Http\Request;

class AdminNossaHistoriaController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nossaHistoria = NossaHistoria::orderBy('id', 'asc')->get();

        return view('pages.admin.nossa-historia.index', compact('nossaHistoria'));
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
    public function update(AdminUpdateNossaHistoriaRequest $request)
    {
        $data = $request->all();
        foreach ($data['id'] as $key => $id) {
            $nossaHistoria = NossaHistoria::find($id);
            $nossaHistoria->title = $data['title'][$key];
            $nossaHistoria->content = $data['content'][$key];
            $nossaHistoria->facebook = $data['facebook'][$key] ?? '';
            $nossaHistoria->instagram = $data['instagram'][$key] ?? '';
            $nossaHistoria->linkedin = $data['linkedin'][$key] ?? '';
            $nossaHistoria->youtube = $data['youtube'][$key] ?? '';
            $nossaHistoria->whatsapp = $data['whatsapp'][$key] ?? '';
            $nossaHistoria->email = $data['email'][$key] ?? '';

            $nossaHistoria->save();
        }

        return $this->flashMessage('success', 'admin.nossa-historia.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function deleteThumbnail(NossaHistoria $nossaHistoria)
    {
        $nossaHistoria->thumbnail = null;
        $nossaHistoria->save();

        return response()->json(['message' => 'Thumbnail deletada com sucesso'], 200);
    }

    public function uploadThumbail(UploadThumbnailRequest $request, NossaHistoria $nossaHistoria)
    {
        $fileUrl = $this->upload('local', $request);
        if (!$fileUrl) {
            return response()->json(['error' => 'Upload falhou'], 500);
        }
        $nossaHistoria->thumbnail = $fileUrl;
        $nossaHistoria->save();
        return response()->json(['url' => $fileUrl], 200);
    }
}
