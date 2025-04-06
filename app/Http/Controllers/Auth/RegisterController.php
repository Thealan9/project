<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function show(){
        return view('auth.register');
    }

    public function handle(){

        request()->validate([
            'name' => ['required','string','max:100'],
            'email' => ['required','email','max:150'],
            'password' => ['required','string','min:4','confirmed'],
            'password_confirmation' => ['required','string','min:4'],
            'phone' => ['required', 'string','min:7', 'max:15']

        ]);

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'phone' => request('phone')

        ]);

        event(new Registered($user));

        Auth::login($user);

        //return redirect()->to(RouteServiceProvider::HOME)->with('success','Usuario Registrado');
        return redirect()->route('inicio')->with('success','Usuario Registrado');
    }
}
