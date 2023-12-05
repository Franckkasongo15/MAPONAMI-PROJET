<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthentificationController extends Controller
{

    public function login():View
    {
        return view('auth.login');
    }

    public function doLogin(LoginRequest $request)
    {

        $credentials = $request->validated();

        if (strpos($request->email, 'esisalama.org')) {

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                //return redirect()->intended(route('home'));
                return redirect()->intended(route('user.publicVote'));
            } else {
                return view('auth.login')->withErrors([
                    'email' => 'Utilisateur non trouver',
                ]);
            }

        } else {

            return view('Auth.login')->withErrors([
                'email' => 'Email non-valide !!',
            ]);
        }


    }


    public function  logout(){
        Auth::logout();
            return to_route('index');
    }

}
