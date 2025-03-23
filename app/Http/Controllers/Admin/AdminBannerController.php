<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\BaseController;
use App\Models\Banner;
use Illuminate\Http\Request;

class AdminBannerController extends BaseController
{
    public function index()
    {
        $banner = Banner::all()->first();
        return view('pages.admin.banner.index', compact('banner'));
    }

    public function update(Request $request)
    {
        $fileUrl = $this->upload('local', $request);
        $banner = Banner::all()->first();
        if (!$banner) {
            $banner = new Banner();
        }
        $banner->img_url = $fileUrl;
        $banner->save();

        return response()->json(['url' => $fileUrl]);
    }

    public function delete()
    {
        $banner = Banner::all()->first();
        $banner->img_url = null;
        $banner->save();

        return response()->json(['url' => null]);
    }
}
