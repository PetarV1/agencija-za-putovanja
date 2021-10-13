@extends('layouts.adminlayout')
@section('content')
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="/">Agencija za putovanja - Pocetna</a>


        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">

            </li>
        </ul>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">

                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3">
                    <h2 class="h2kls">Moje rezervacije - {{  auth()->user()->ime }} {{  auth()->user()->prezime }}</h2>
                </div>

                <div class="table-responsive">
                        <table class="table table-striped table-sm">
                            <thead>
                            <tr>
                                <th class="align-middle text-center">Grad</th>
                                <th class="align-middle text-center">Polazak</th>
                                <th class="align-middle text-center">Povratak</th>
                                <th class="align-middle text-center">Cijena</th>
                                <th class="align-middle text-center">Broj Osoba</th>
                                <th class="align-middle text-center">Broj Noćenja</th>
                                <th class="align-middle text-center">Otkaži rezervaciju</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($rez) > 0)
                                @foreach( $rez as $user )
                                    <tr>
                                        <td class="align-middle text-center">{{ $user->Grad }}</td>
                                        <td class="align-middle text-center">{{ $user->Polazak }}</td>
                                        <td class="align-middle text-center">{{ $user->Dolazak }}</td>
                                        <td class="align-middle text-center">{{ $user->Cijena }}</td>
                                        <td class="align-middle text-center">{{ $user->BrojOsoba }}</td>
                                        <td class="align-middle text-center">{{ $user->BrojNoci }}</td>
                                        <td class="align-middle text-center">
                                            <a class="btn btn-sm btn-danger" data-toggle="tooltip" data-placement="top" title="Otkaži" href="/mojerezervacije/{{ $user->ID }}" role="button">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    @if(count($rez) == 0)
                        <p style="color: red; font-size: 20px;">Nemate rezervacija.</p>
                    @endif
                </div>
            </main>
        </div>
    </div>
@endsection
