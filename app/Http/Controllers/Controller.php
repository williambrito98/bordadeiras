<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

abstract class Controller
{
    protected function upload(string $type, Request $request)
    {
        if ($type === 'local') {
            $isUploaded = $request->file('file');
            if (!$isUploaded) {
                Log::error('Upload falhou: ' . $isUploaded);
                return false;
            }

            $file = $request->file('file');
            $path = $file->store('uploads', 'public');
            return asset(Storage::url($path));
        }
    }

    protected function flashMessage(string $type, string $route)
    {
        if ($type === 'error') {
            return redirect()->route($route)->with('message', 'Erro ao realizar operação')->with('type', 'danger');
        }

        return redirect()->route($route)->with('message', 'Operação realizada com sucesso')->with('type', 'success');
    }


}
