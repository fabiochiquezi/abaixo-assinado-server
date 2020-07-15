<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('dashboard.login');
    }

    public function loginAction(Request $request){
        $data = $request->only('email', 'password');

        $validLaravel = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        if(!filter_var($data['email'], FILTER_SANITIZE_EMAIL) ){
            return redirect()->route('dashboard.login')->withInput()->withErrors(['E-mail inválido']);
        }

        if(Auth::attempt($data)){
            return redirect()->route('dashboard.dataTable');
        }

        return redirect()->route('dashboard.login')->withInput()->withErrors(['Dados inválidos']);
    }

    public function logoutAction(){
        Auth::logout();

        return redirect()->route('dashboard.dataTable');
    }
}
