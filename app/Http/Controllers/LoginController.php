<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginAction(Request $request){
        $validLaravel = $request->validate([
            'email' => ['required'],
            'password' => ['required']
        ]);

        if( Auth::attempt($request->only( 'email', 'password' )) )
            return redirect()->route('dashboard.dataTable');
        
        return redirect()
                ->route('dashboard.login')
                ->withInput()
                ->withErrors(['Dados inválidos']);
    }

    public function logoutAction(){
        Auth::logout();
        return redirect()->route('dashboard.dataTable');
    }
}
