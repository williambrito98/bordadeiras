<?php

namespace App\Http\Controllers\Admin;


class DashboardController extends BaseController
{
    public function index()
    {
        return view('pages.admin.dashboard');
    }
}
