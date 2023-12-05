<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginUserController extends Controller
{
    public function Recuperar()
    {
        return view('Recuperar');
    }
    public function login()
    {
        return view('iniciodesesion');
    }

    public function iniciar(LoginRequest $request){
        $credentials = $request->getCredentials();

        if(!Auth::validate($credentials)){
           return redirect()->to('/login')->withErrors('Error');
           //return redirect('Error');
        }
       
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        
        Auth::login($user);
        return $this->authenticated($request, $user);

        }
        public function authenticated(Request $request, $user){
            return redirect('/contenido');
    }

    

    public function crear()
    {
        return view('relacion');
    }
}
