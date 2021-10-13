<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'ime' => 'required',
            'prezime' => 'required',
            'email' => 'required|unique:korisnik,email',
            'password' => ['required','string', 'confirmed',
                Password::min(5)->letters()->numbers()],
        ]);


        User::create([
            'ime' => $request->ime,
            'prezime' => $request->prezime,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        auth()->attempt($request->only('email', 'password'));

        return redirect('/')->with('success', 'Registracija uspješna');
    }
}
