<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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


    public function login_index(){
        return view('auth.login');
    }

    public function authenticate (Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember = $request->filled('remember');

        if(Auth::attempt($credentials, $remember)){
            $request->session()->regenerate();

            return redirect()->route('index.home');
        }
    }


    public function logout()
    {
        Session::flush();
        
        Auth::logout();

        return redirect('login');
    }
}
