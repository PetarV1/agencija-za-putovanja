@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="heading">Informacije o putovanju</h1>
        <div class="box-container">

            <form action="/checkout/{{ $rezervacija[0]->ID }}/putovanje" method="POST">
                @csrf
            <div class="box">
                    <h3>{{ $rezervacija[0]->Grad }}</h3>
                    <p>Cijena noćenja za jednu osobu je: {{ $rezervacija[0]->Cijena }}</p>
                    <p>Polazak: {{ $rezervacija[0]->Polazak }}</p>
                    <p>Povratak: {{ $rezervacija[0]->Dolazak }}</p>
                    <p>Broj osoba: <input type="number" id="quantity" name="quantity" min="1" max="12">
                    </p>
                    <hr>
                    <p>Rezervirajte svoje mjesto odmah!</p>
                    <button type="submit" class="odjavabtnglavna">Rezerviraj</button>
            </div>
            </form>
        </div>
    </div>
@endsection
