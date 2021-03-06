<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\Http\Controllers\Controller;


class LoginController extends Controller
{
    public function login()
    {
        $credentials = $this->validate(request(), [
            'email' => 'email|required|string',
            'password' => 'required|string'
        ]);
        
       

        if(Auth::attempt($credentials)) 
        {
            return 'Tu sesion ha iniciado correctamente';
        }

        return back()->withErrors(['email' => 'Estas credenciales no coinciden con nuestros registros, por favor vuelve a intentar']);
    }
}