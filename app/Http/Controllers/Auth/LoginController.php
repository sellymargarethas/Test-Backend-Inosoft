<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function __invoke(Request $request)
    {
        request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8']
        ]);
        
        if (!$token = auth()->attempt($request->only('email', 'password'))){
            return response()->json(['error' => 'Unauthorized'], 401);;
        }

        $user = auth()->user();
        return response()->json(compact('token', 'user'));
    }
}