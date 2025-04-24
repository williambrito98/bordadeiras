<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\AdminStorePorOndeProjetoPassouRequest;
use App\Http\Requests\Admin\AdminUpdatePorOndeProjetoPassouRequest;
use App\Http\Requests\Admin\UploadThumbnailRequest;
use App\Models\PorOndeProjetoPassou;

class AdminPorOndeProjetoPassou extends BaseController
{
    public function index()
    {

        $locais = PorOndeProjetoPassou::orderBy('order', 'asc')->get();
        return view('pages.admin.por-onde-projeto-passou.index', compact('locais'));
    }

    public function create()
    {
        return view('pages.admin.por-onde-projeto-passou.create');
    }

    public function store(AdminStorePorOndeProjetoPassouRequest $request)
    {
        extract($request->validated());
        $imagemUrl = $this->upload('local', $request, 'src');
        $order = PorOndeProjetoPassou::count() + 1;

        $local = new PorOndeProjetoPassou();
        $local->description = $description;
        $local->iframe_url = $iframe_url;
        $local->src = $imagemUrl;
        $local->order = $order;

        $local->save();


        return $this->flashMessage('success', 'admin.por-onde-projeto-passou.index');
    }

    public function edit(string $local)
    {
        $local = PorOndeProjetoPassou::findOrFail($local);
        return view('pages.admin.por-onde-projeto-passou.edit', compact('local'));
    }

    public function update(AdminUpdatePorOndeProjetoPassouRequest $request, string $local)
    {
        $local = PorOndeProjetoPassou::findOrFail($local);

        $local->description = $request->validated()['description'];

        if ($request->validated()['tipo'] === 'youtube') {
            $local->iframe_url = $request->validated()['iframe_url'];
        }

        $local->save();
        return $this->flashMessage('success', 'admin.por-onde-projeto-passou.index');

    }

    public function uploadImage(UploadThumbnailRequest $request, string $local)
    {
        $local = PorOndeProjetoPassou::findOrFail($local);
        $fileUrl = $this->upload('local', $request);

        if (!$fileUrl) {
            return response()->json(['error' => 'Upload falhou'], 500);
        }

        $local->src = $fileUrl;
        $local->save();

        return response()->json(['url' => $fileUrl], 200);
    }

    public function destroy(string $local)
    {
        $local = PorOndeProjetoPassou::findOrFail($local);
        $local->delete();
        return $this->flashMessage('success', 'admin.por-onde-projeto-passou.index');
    }

    public function updateOrder(string $local, string $newOrder)
    {
        $local = PorOndeProjetoPassou::findOrFail($local);
        $currentOrder = $local->order;
        $localWithSameOrder = PorOndeProjetoPassou::where('order', $newOrder)->first();

        if ($localWithSameOrder) {
            $localWithSameOrder->order = $currentOrder;
            $localWithSameOrder->save();
        }

        $local->order = $newOrder;
        $local->save();

        return response()->json(['success' => true], 200);
    }

    public function updateVisivel(string $local, string $visivel) {
        $local = PorOndeProjetoPassou::findOrFail($local);
        $local->visivel = $visivel;
        $local->save();

        return response()->json(['success' => true], 200);
    }


}
