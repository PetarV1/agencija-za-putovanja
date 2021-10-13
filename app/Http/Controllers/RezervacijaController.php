<?php

namespace App\Http\Controllers;

use App\Models\Rezervacija;
use App\Models\User;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RezervacijaController extends Controller
{
    public function index($id)
    {
        $rezervacija = DB::select('select * from grad where id = ?', [$id]);
        return view('stranice.checkout', ['rezervacija' => $rezervacija]);
    }

    public function reservation($id, Request $request)
    {

        $rezervacija = DB::select('select * from grad where id = ?', [$id]);
        $p = new DateTime($rezervacija[0]->Polazak);
        $d = new DateTime($rezervacija[0]->Dolazak);
        $dani = date_diff($p, $d);
        (string)$Ukupna = (int)$rezervacija[0]->Cijena * (int)$request->quantity * (int)$dani->d;
        $Ukupna = $Ukupna."€";
        DB::table('putovanje')->insert(
            ['Polazak' => $rezervacija[0]->Polazak, 'Dolazak' => $rezervacija[0]->Dolazak, 'Cijena' => $Ukupna,
                'BrojOsoba' => $request->quantity, 'BrojNoci' => $dani->d,
                'KorisnikID' => Auth::user()->id, 'GradID' => $rezervacija[0]->ID]
        );
        return redirect('/')->with('success', 'Uspješno ste rezervirali putovanje!');

    }

    public function mojerez()
    {
        $id = Auth::user()->id;
        $rez = DB::select('SELECT grad.Grad, putovanje.Polazak, putovanje.Dolazak, putovanje.Cijena, putovanje.BrojOsoba, putovanje.BrojNoci, putovanje.ID from grad, putovanje WHERE grad.ID = putovanje.GradID AND putovanje.KorisnikID = ?  ', [$id]);
        return view('stranice.mojerezervacije', ['rez' => $rez]);
    }

    public function delete($id)
    {
        DB::table('putovanje')->where('ID', '=', $id)->delete();
        return redirect('/mojerezervacije')->with('obrisan', 'Rezervacija otkazana!');
    }
}
