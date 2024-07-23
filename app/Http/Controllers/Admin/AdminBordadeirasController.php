<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\AdminStoreBordadeirasRequest;
use App\Http\Requests\Admin\AdminUpdateBordadeirasRequest;
use App\Http\Requests\Admin\UploadImagesRequest;
use App\Http\Requests\Admin\UploadThumbnailRequest;
use App\Models\Bordadeiras;
use App\Models\Cidades;
use App\Models\Estados;
use Illuminate\Http\Request;

class AdminBordadeirasController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bordadeiras = Bordadeiras::all();
        return view('pages.admin.bordadeiras.index', compact(['bordadeiras']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $estados = Estados::all();

        return view('pages.admin.bordadeiras.create', compact(['estados']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminStoreBordadeirasRequest $request)
    {

        $data = $request->all();
        $bordadeira = new Bordadeiras();
        $bordadeira->nome = $data['nome'];
        $bordadeira->content = $data['content'];
        $bordadeira->cidade_id = $data['cidade'];
        $bordadeira->email = $data['email'];
        $bordadeira->instagram = $data['instagram'];
        $bordadeira->facebook = $data['facebook'];
        $bordadeira->youtube = $data['youtube'];
        $bordadeira->whatsapp = $data['whatsapp'];
        $bordadeira->linkedin = $data['linkedin'];

        $bannerUrl = $this->upload('local', $request, 'banner');
        $thumbnailUrl = $this->upload('local', $request, 'thumbnail');
        $images = $this->upload('local', $request, 'images');

        $bordadeira->banner_url = $bannerUrl;
        $bordadeira->thumbnail_url = $thumbnailUrl;
        $bordadeira->images = $images;

        $bordadeira->save();

        return $this->flashMessage('success', 'admin.bordadeiras.index');


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
    public function edit(Bordadeiras $bordadeira)
    {
        $estados = Estados::all();
        $cidades = [];
        if ($bordadeira->cidade) {
            $cidades = Cidades::where('estado_id', $bordadeira->cidade->estado_id)->get();
        }

        return view('pages.admin.bordadeiras.edit', compact(['bordadeira', 'estados', 'cidades']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdminUpdateBordadeirasRequest $request, Bordadeiras $bordadeira)
    {

        $bordadeira->nome = $request->input('nome');
        $bordadeira->content = $request->input('content');
        $bordadeira->cidade_id = $request->input('cidade');
        $bordadeira->email = $request->input('email');
        $bordadeira->instagram = $request->input('instagram');
        $bordadeira->facebook = $request->input('facebook');
        $bordadeira->youtube = $request->input('youtube');
        $bordadeira->whatsapp = $request->input('whatsapp');
        $bordadeira->linkedin = $request->input('linkedin');

        $bordadeira->save();

        return $this->flashMessage('success', 'admin.bordadeiras.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    /**
     * Upload the thumbnail image.
     */
    public function uploadThumbail(Bordadeiras $bordadeira, UploadThumbnailRequest $request)
    {

        $fileUrl = $this->upload('local', $request);
        if (!$fileUrl) {
            return response()->json(['error' => 'Upload falhou'], 500);
        }
        $bordadeira->thumbnail_url = $fileUrl;
        $bordadeira->save();
        return response()->json(['url' => $fileUrl], 200);
    }

    public function uploadImages(Bordadeiras $bordadeira, UploadImagesRequest $request)
    {
        $fileUrl = $this->upload('local', $request);

        if (!$fileUrl) {
            return response()->json(['error' => 'Upload falhou'], 500);
        }

        $images = $bordadeira->images;
        $images[] = $fileUrl;
        $bordadeira->images = $images;
        $bordadeira->save();

        return response()->json(['url' => $fileUrl], 200);

    }

    public function deleteImage(Bordadeiras $bordadeira, Request $request)
    {
        $image = $request->input('image');
        $images = $bordadeira->images;
        $images = array_filter($images, function ($img) use ($image) {
            return $img !== $image;
        });
        $bordadeira->images = $images;
        $bordadeira->save();
        return response()->json(['message' => 'Imagem deletada com sucesso'], 200);
    }

    public function deleteThumbnail(Bordadeiras $bordadeira)
    {
        $bordadeira->thumbnail_url = '';
        $bordadeira->save();
        return response()->json(['message' => 'Thumbnail deletada com sucesso'], 200);
    }

    public function uploadBanner(Bordadeiras $bordadeira, Request $request)
    {
        $fileUrl = $this->upload('local', $request);
        if (!$fileUrl) {
            return response()->json(['error' => 'Upload falhou'], 500);
        }
        $bordadeira->banner_url = $fileUrl;
        $bordadeira->save();
        return response()->json(['url' => $fileUrl], 200);
    }

    public function deleteBanner(Bordadeiras $bordadeira)
    {
        $bordadeira->banner_url = '';
        $bordadeira->save();
        return response()->json(['message' => 'Banner deletado com sucesso'], 200);
    }


}
