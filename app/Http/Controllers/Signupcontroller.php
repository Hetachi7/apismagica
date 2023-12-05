<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;

class Signupcontroller extends Controller
{
    public function show(){
        return view('Registro');
    }

    public function register(RegisterRequest $request){
        $user = User::create($request->validated());
        return redirect('/login')->with('success', 'Account created successfully');
    }

    public function registro (Request $request){
        $request-> validate([
            'user'=> 'required|unique:users,usuario',
                'email'=> 'required|unique:users,email',
                'password'=> 'required|min:8',
    
    
        ]);
    
        $user = new User();
        $user-> usuario=$request->usuario; 
        $user-> email=$request->email; 
        $user-> password=$request->password; 
        $user-> save(); 
        return response()->json(["mensaje" => "usuario registrado correctamente"], 201);
    }



}
