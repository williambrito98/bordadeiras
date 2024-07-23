<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

abstract class BaseController
{

    protected function upload(string $type, Request $request, $key = 'file')
    {
        if ($type === 'local') {
            $canUpload = $request->hasFile($key);
            if (!$canUpload) {
                Log::error('Upload falhou: ' . $canUpload);
                return false;
            }


            $files = $request->file($key);
            if (gettype($files) === 'array') {
                $images = [];
                foreach ($files as $image) {
                    $path = $image->store('uploads', 'public');
                    $images[] = asset(Storage::url($path));
                }
                return $images;
            }


            $path = $files->store('uploads', 'public');
            return asset(Storage::url($path));
        }

        return false;
    }

    protected function flashMessage(string $type, string $route)
    {
        if ($type === 'error') {
            return redirect()->route($route)->with('message', 'Erro ao realizar operação')->with('type', 'danger');
        }

        return redirect()->route($route)->with('message', 'Operação realizada com sucesso')->with('type', 'success');
    }


}
