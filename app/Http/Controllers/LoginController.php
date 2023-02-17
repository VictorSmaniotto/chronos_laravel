<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function login()
    {
        return view('site.login');
    }

    public function postLogin(Request $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' =>  $request->password])) {

           return redirect()->route('admin.usuarios.index');

        } else {
            return redirect()->back()->withInput()->with('error', 'E-mail ou Senha inválido!');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
