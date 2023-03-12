<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;

class RegisterUserController extends Controller
{
    public function create() {
        return view('admin.users.registerUser')
        ->with('user', null);
    }

    public function store(Request $request) {
        $attributes = request()->validate([
            'name' => 'required',
            'email' => ['required','email','unique:users,email'],
            'password' => ['required','min:8','confirmed'],
        ]);

        // $attributes['slug'] = Str::slug($attributes['name']);
        User::create($attributes);
        return redirect('/admin');
    }

    public function edit(User $user) {
        return view('admin.users.registerUser')
        ->with('user', $user);
    }

    public function Update(User $user, Request $request) {
        $attributes = request()->validate([
            'name' => 'required',
            'email' => ['required','email','unique:users,email,'.$user->id],
            'password' => ['required','min:8','confirmed'],
        ]);

        $user->update($attributes);

        session()->flash('success','User Updated Successfully');

        // Redirect to the Admin Dashboard
        return redirect('/admin');
    }

    public function destroy(User $user) {
        $user->delete();
        // Set a flash message
        session()->flash('success','User Deleted Successfully');
        // Redirect to the Admin Dashboard
        return redirect('/admin');
    }

}
