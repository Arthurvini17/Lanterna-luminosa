<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register_index()
    {
        return view('auth.register');
    }


    public function register_create(Request $request)
    {

        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email',  'unique:users,email'],
            'password' => ['required'],
        ], [
            'name.required' => 'Esse campo tem que ser preenchido',
            'email.required' => 'Esse campo tem que ser preenchido',
            'email.email' => 'O campo tem que ser preenchido com um email',
            'email.unique' => 'Email ja em uso',
            'password.required' => 'Preencha o campo',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect('/')->with('success', 'registro feito');
    }
}
