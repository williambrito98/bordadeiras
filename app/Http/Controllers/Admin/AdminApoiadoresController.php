<?php

namespace App\Http\Controllers\Admin;

use App\Models\Apoiadores;
use Illuminate\Http\Request;

class AdminApoiadoresController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $apoiadores = Apoiadores::all()->first();
        return view('pages.admin.apoiadores.index', compact('apoiadores'));
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

    public function updateIncentivadores(Request $request)
    {
        $apoiadores = Apoiadores::all()->first();


        if ($request->hasFile('file')) {

            $request->validate([
                'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:12288',
            ]);


            $fileUrl = $this->upload('local', $request);

            if (!$fileUrl) {
                return response()->json(['error' => 'Upload falhou'], 500);
            }

            $incentivadores = $apoiadores->incentivadores;
            $incentivadores[] = [
                'site_url' => $request->input('input') ?? "#",
                'logo_url' => $fileUrl
            ];


            $apoiadores->incentivadores = $incentivadores;
            $apoiadores->save();


            return response()->json(['url' => $fileUrl], 200);
        }


        $incentivadores = $apoiadores->incentivadores;

        foreach ($incentivadores as $key => $incentivador) {
            if ($incentivador['logo_url'] == $request->input('file')) {
                $incentivadores[$key]['site_url'] = $request->input('input');
            }
        }


        $apoiadores->incentivadores = $incentivadores;
        $apoiadores->save();

        return response()->json(['success' => 'Upload realizado com sucesso'], 200);

    }

    public function deleteIncentivadores(Request $request)
    {
        $apoiadores = Apoiadores::all()->first();
        $incentivadores = $apoiadores->incentivadores;

        $incentivadores = array_filter($incentivadores, function ($incentivador) use ($request) {
            return $incentivador['logo_url'] !== $request->input('image');
        });

        $apoiadores->incentivadores = $incentivadores;
        $apoiadores->save();

        return response()->json(['message' => 'Incentivador deletado com sucesso'], 200);
    }

    public function updatePatrocinadores(Request $request)
    {
        $apoiadores = Apoiadores::all()->first();


        if ($request->hasFile('file')) {

            $request->validate([
                'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:12288',
            ]);


            $fileUrl = $this->upload('local', $request);

            if (!$fileUrl) {
                return response()->json(['error' => 'Upload falhou'], 500);
            }

            $patrocinadores = $apoiadores->patrocinadores;
            $patrocinadores[] = [
                'site_url' => $request->input('input') ?? "#",
                'logo_url' => $fileUrl
            ];


            $apoiadores->patrocinadores = $patrocinadores;
            $apoiadores->save();


            return response()->json(['url' => $fileUrl], 200);
        }


        $patrocinadores = $apoiadores->patrocinadores;

        foreach ($patrocinadores as $key => $patrocinador) {
            if ($patrocinador['logo_url'] == $request->input('file')) {
                $patrocinadores[$key]['site_url'] = $request->input('input');
            }
        }


        $apoiadores->patrocinadores = $patrocinadores;
        $apoiadores->save();

        return response()->json(['success' => 'Upload realizado com sucesso'], 200);

    }

    public function deletePatrocinadores(Request $request)
    {
        $apoiadores = Apoiadores::all()->first();
        $patrocinadores = $apoiadores->patrocinadores;

        $patrocinadores = array_filter($patrocinadores, function ($patrocinador) use ($request) {
            return $patrocinador['logo_url'] !== $request->input('image');
        });


        $apoiadores->patrocinadores = $patrocinadores;
        $apoiadores->save();

        return response()->json(['message' => 'Patrocinador deletado com sucesso'], 200);
    }

    public function updateParceiros(Request $request)
    {
        $apoiadores = Apoiadores::all()->first();


        if ($request->hasFile('file')) {

            $request->validate([
                'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:12288',
            ]);


            $fileUrl = $this->upload('local', $request);

            if (!$fileUrl) {
                return response()->json(['error' => 'Upload falhou'], 500);
            }

            $parceiros = $apoiadores->parceiros;
            $parceiros[] = [
                'site_url' => $request->input('input') ?? "#",
                'logo_url' => $fileUrl
            ];


            $apoiadores->parceiros = $parceiros;
            $apoiadores->save();


            return response()->json(['url' => $fileUrl], 200);
        }


        $parceiros = $apoiadores->parceiros;

        foreach ($parceiros as $key => $parceiro) {
            if ($parceiro['logo_url'] == $request->input('file')) {
                $parceiros[$key]['site_url'] = $request->input('input');
            }
        }


        $apoiadores->parceiros = $parceiros;
        $apoiadores->save();

        return response()->json(['success' => 'Upload realizado com sucesso'], 200);
    }

    public function deleteParceiros(Request $request)
    {
        $apoiadores = Apoiadores::all()->first();
        $parceiros = $apoiadores->parceiros;

        $parceiros = array_filter($parceiros, function ($parceiro) use ($request) {
            return $parceiro['logo_url'] !== $request->input('image');
        });

        $apoiadores->parceiros = $parceiros;
        $apoiadores->save();

        return response()->json(['message' => 'Parceiro deletado com sucesso'], 200);
    }

    public function updateRealizadores(Request $request)
    {
        $apoiadores = Apoiadores::all()->first();


        if ($request->hasFile('file')) {

            $request->validate([
                'file' => 'required|image|mimes:jpeg,png,jpg,gif|max:12288',
            ]);


            $fileUrl = $this->upload('local', $request);

            if (!$fileUrl) {
                return response()->json(['error' => 'Upload falhou'], 500);
            }

            $realizadores = $apoiadores->realizadores;
            $realizadores[] = [
                'site_url' => $request->input('input') ?? "#",
                'logo_url' => $fileUrl
            ];


            $apoiadores->realizadores = $realizadores;
            $apoiadores->save();


            return response()->json(['url' => $fileUrl], 200);
        }


        $realizadores = $apoiadores->realizadores;

        foreach ($realizadores as $key => $realizador) {
            if ($realizador['logo_url'] == $request->input('file')) {
                $realizadores[$key]['site_url'] = $request->input('input');
            }
        }


        $apoiadores->realizadores = $realizadores;
        $apoiadores->save();

        return response()->json(['success' => 'Upload realizado com sucesso'], 200);
    }

    public function deleteRealizadores(Request $request)
    {
        $apoiadores = Apoiadores::all()->first();
        $realizadores = $apoiadores->realizadores;

        $realizadores = array_filter($realizadores, function ($realizador) use ($request) {
            return $realizador['logo_url'] !== $request->input('image');
        });

        $apoiadores->realizadores = $realizadores;
        $apoiadores->save();

        return response()->json(['message' => 'Realizador deletado com sucesso'], 200);
    }

}
