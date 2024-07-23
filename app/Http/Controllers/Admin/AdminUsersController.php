<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\AdminStoreUserRequest;
use App\Http\Requests\Admin\AdminUpdateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUsersController extends BaseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all(['id', 'name', 'email']);
        return view('pages.admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminStoreUserRequest $request)
    {
        try {
            $data = $request->validated();
            $data['password'] = Hash::make($data['password']);
            User::create($data);
            return $this->flashMessage('success', 'admin.users.index');
        } catch (\Exception $e) {
            return $this->flashMessage('error', 'admin.users.index');
        }
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
    public function edit(User $user)
    {
        return view('pages.admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AdminUpdateUserRequest $request, User $user)
    {
        try {
            $data = $request->validated();
            $user->update($data);
            return $this->flashMessage('success', 'admin.users.index');
        } catch (\Exception $e) {
            return $this->flashMessage('error', 'admin.users.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        if ($user->id === auth()->user()->id) {
            return $this->flashMessage('error', 'admin.users.index');
        }

        $user->delete();
        return $this->flashMessage('success', 'admin.users.index');
    }
}
