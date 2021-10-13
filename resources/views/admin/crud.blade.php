@extends('layouts.adminlayout')
@section('content')
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/">Agencija za putovanja - Pocetna</a>

        <form method="GET" action="{{ url('/search') }}">
            <input class="pretraga" name="query" type="text" placeholder="Pretraži">
            <button class="odjavabtnadmin" style="width: 35px; border-radius: 10px 10px;" type="submit"><i class="fas fa-search"></i>

            </button>
        </form>

        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <form method="POST" action="/admin/logout">
                    @csrf <button class="odjavabtnadmin" type="submit">Odjava</button>
                </form>
            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                        <li class="nav-item">
                            <a class="nav-link" href="/admin">
                                <span data-feather="file"></span>
                                Korisnici
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
                    <h2 class="h2kls" >Tablica korisnika</h2>
                    <a class="btn btn-primary" href="admin/create" role="button">
                        Dodaj novog korisnika <i class="fas fa-user-plus"></i>
                    </a>
                </div>

                <div class="table-responsive">
                    @if(isset($korisnici))
                        <table class="table table-striped table-sm">
                            <thead>
                            <tr>
                                <th class="align-middle text-center">ID</th>
                                <th class="align-middle text-center">Ime</th>
                                <th class="align-middle text-center">Prezime</th>
                                <th class="align-middle text-center">E-mail</th>
                                <th class="align-middle text-center">Datum registriranja</th>
                                <th class="align-middle text-center">Vrsta korisnika</th>
                                <th class="align-middle text-center">Operacije</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($korisnici) > 0)
                                @foreach( $korisnici as $user )
                                    <tr>
                                        <td class="align-middle text-center">{{ $user->id }}</td>
                                        <td class="align-middle text-center">{{ $user->ime }}</td>
                                        <td class="align-middle text-center">{{ $user->prezime }}</td>
                                        <td class="align-middle text-center">{{ $user->email }}</td>
                                        <td class="align-middle text-center">{{ $user->created_at }}</td>
                                        <td class="align-middle text-center">{{ $user->vrstakorisnika }}</td>
                                        <td class="align-middle text-center">
                                            <a class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Ažuriranje" href="/admin/{{ $user->id }}/update" role="button">
                                                <i class="far fa-edit"></i>
                                            </a>
                                            <a class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Brisanje" href="/admin/{{ $user->id }}/delete" role="button">
                                                <i class="far fa-trash-alt"></i>
                                            </a>

                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                        @if(count($korisnici) == 0)
                            <p style="color: red; font-size: 20px;">Nema rezultata za navedenu pretragu!</p>
                        @endif

                    @endif
                </div>
            </main>
        </div>
    </div>
@endsection
