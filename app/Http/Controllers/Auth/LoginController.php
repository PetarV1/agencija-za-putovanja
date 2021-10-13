<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        if(!auth()->attempt($request->only('email', 'password')))
        {
            return back()->withInput()->withErrors(['email'=>'Uneseni podaci nisu točni.']);
        }

        if(Auth::user()->vrstakorisnika == 'Admin')
        {
            return redirect('/admin')->with('success', 'Dobro došli natrag!');
        }
        else
        {
            return redirect('/')->with('success', 'Dobro došli natrag!');
        }

    }
}
