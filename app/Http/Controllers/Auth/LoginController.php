<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class LoginController extends Controller
{
    public function show(){
        return view('auth.login');
    }

    public function handle(){

        $success = auth()->attempt([
            'email' => request('email'),
            'password' =>request('password')
        ],request()->has('remember'));

        if ($success) {
            $user = auth()->user();

            // Redirigir según el rol
            if ($user->role === 'admin') {
                return redirect()->route('admin')->with('success', 'Bienvenido, Administrador');
            } else {
                return redirect()->route('inicio')->with('success', 'Bienvenido');
            }
        }

         return back()->withErrors([
            'email'=>'Las credencciales no coinciden con la Db',
            'password'=>'Las credencciales no coinciden con la Db',
         ]);
    }
}
