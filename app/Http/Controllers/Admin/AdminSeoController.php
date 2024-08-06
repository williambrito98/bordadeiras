<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\UploadThumbnailRequest;
use App\Models\Seo;
use Illuminate\Http\Request;

class AdminSeoController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $seo = Seo::all()->first();

        return view('pages.admin.seo.index', compact('seo'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Seo::updateOrCreate(['id' => 1], $data);

        return $this->flashMessage('success', 'admin.seo.index');
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function uploadFacebookImagem(UploadThumbnailRequest $request)
    {

        $fileUrl = $this->upload('local', $request);
        $seo = Seo::all()->first();
        $seo->og_image = $fileUrl;
        $seo->save();

        return response()->json(['url' => $fileUrl]);

    }

    public function uploadTwitterImagem(UploadThumbnailRequest $request)
    {
        $fileUrl = $this->upload('local', $request);
        $seo = Seo::all()->first();
        $seo->twitter_image = $fileUrl;
        $seo->save();

        return response()->json(['url' => $fileUrl]);
    }
}
