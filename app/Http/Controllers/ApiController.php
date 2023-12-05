<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    /** 
     * 
     *  @param Request $request
     *  @return void
     */
   
     public function register(Request $request): JsonResponse
  {
    $validator = Validator::make($request->all(), [
      'user'         => 'required|string|max:255',
      'email'           => 'required|string|email|unique:users',
      'password'        => 'required|string|min:8',
      'passwordConfirm' => 'required|min:8|same:password'
    ]);


    if ($validator->fails()) {
      return response()->json($validator->errors());
    }

    $user =  User::create([
      'user'         => $request->user,
      'email'           => $request->email,
      'password'        => Hash::make($request->password),
    ]);

    $token = $user->createToken('auth_token')->plainTextToken;

    return response()->json(['data' => $user, 'access_token' => $token, 'token_type' => 'Bearer',]);
  }
   
  /**
  * Login by user
  *
  * @param Request $request
  * @return void
  */
 public function login(Request $request): JsonResponse
 {
   if (!Auth::attempt($request->only('email', 'password'))) {
     return response()
       ->json(['message' => 'Invalid email or password'], 401);
   }

   $user = User::where('email', $request['email'])->firstOrFail();

   $token = $user->createToken('auth_token')->plainTextToken;

   return response()
     ->json([
       'message'      => 'Hi!' . $user->name,
       'access_token' => $token,
       'token_type'   => 'Bearer',
       'user'         => $user,
     ]);
 }

}
