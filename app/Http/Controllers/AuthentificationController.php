<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthentificationController extends Controller
{
    public function home():View
    {
        return view('index');
    }

    public function loadForm():View{
        return view('Auth.login');
    }

    public function AuthVerification(LoginRequest $request)
    {

        $credentials = $request->validated();

        if (strpos($request->email, 'esisalama.org')) {

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                //return redirect()->intended(route('home'));
                return redirect()->route('index');
            } else {
                return view('Auth.login')->withErrors([
                    'email' => 'Utilisateur non trouver',
                ]);
            }

        } else {

            return view('Auth.login')->withErrors([
                'email' => 'Email non-valide !!',
            ]);
        }


    }

    public function registerRedirect()
    {
        return view('Auth.register');
    }

    public function register(LoginRequest $request)
    {
        //dd($request);

        $credentials = $request->validated();

        if (strpos($request->email, 'esisalama.org')) {
            if($request->validated()){

                $credentials = [
                    'email' => $request->email,
                    'password' => $request->password,
                ];

                User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'promotion' => $request->promotion,
                    'password' => Hash::make($request->password),

                ]);

                if (Auth::attempt($credentials)) {
                    $request->session()->regenerate();
                    return redirect()->route('login');
                }
            }
        } else {
            return view('Auth.register')->withErrors([
                'email' => 'Email non-valide !!',
            ]);
        }

    }

    public function  logout(){
        Auth::logout();
            return to_route('login');
    }
}
