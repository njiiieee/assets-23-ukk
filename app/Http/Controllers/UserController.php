<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $users = Auth::user();

        return view('profile', compact("users"));
    }

    public function edit(string $id)
    {
        //get post by ID
        $users = User::findOrFail($id);

        //render view with post
        return view('profile', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //get post by ID
        $users = User::findOrFail($id);

        //validate form
        $credentials = $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'username' => 'required',
            'alamat' => 'required',
            'tglahir' => 'required',
            'gender' => 'required',
        ]);

        $users->update($credentials);

        //redirect to index
        return redirect("/user")
            ->with(['success' => 'Data Berhasil Diubah!']);
    }
}
