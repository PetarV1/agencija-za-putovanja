<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $korisnici = User::all();

        return view('admin.crud', ['korisnici' => $korisnici]);
    }

    public function store()
    {
        return view('admin.store');
    }

    public function storeuser(Request $request)
    {

        $this->validate($request, [
            'ime' => 'required',
            'prezime' => 'required',
            'email' => 'required|unique:korisnik,email',
            'password' => 'required',
            ]);

        User::create([
            'ime' => $request->ime,
            'prezime' => $request->prezime,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'vrstakorisnika' => $request->vrstakorisnika,
        ]);

        return redirect('/admin')->with('success', 'Korisnik uspješno kreiran.');
    }

    public function edit($id)
    {
        $user = DB::select('select * from korisnik where id = ?', [$id]);
        return view('admin.update', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'ime' => 'required',
            'prezime' => 'required',
            'email' => 'required',
        ]);

        $user_ime = $request->input('ime');
        $user_prezime = $request->input('prezime');
        $user_email = $request->input('email');
        $user_vrstakorisnika = $request->input('vrstakorisnika');

        DB::update('update korisnik set ime = ?, prezime = ?, email = ?, vrstakorisnika = ? where id = ?', [$user_ime, $user_prezime, $user_email, $user_vrstakorisnika, $id]);

        return redirect('/admin')->with('success', 'Korisnik uspješno ažuriran!');
    }

    public function delete($id)
    {
        $data=User::find($id);
        $data->delete();
        return redirect('/admin')->with('obrisan', 'Korisnik obrisan!');
    }

    public function odjava()
    {
        auth()->logout();
        return redirect('/')->with('success', 'Doviđenja!');
    }
    public function search(Request $request)
    {
        if(isset($_GET['query'])){

            $search_text = $_GET['query'];
            $korisnici = DB::table('korisnik')->where('ime','LIKE','%'.$search_text.'%')->paginate(10);
            return view('admin.crud', ['korisnici' => $korisnici]);

        }else {
            return view('admin.search');
        }
    }
}
