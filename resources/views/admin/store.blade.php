@extends('layouts.adminlayout')
@section('content')

    <div class="pre-header-admin">
        <div class="container-fluid">
                <div class="nav-admin">
                    <ul>
                        <li style="color: white; font-size: 30px;">Admin Panel</li>
                        <li><a href="/">Pocetna</a></li>
                        <li><a href="/admin">Tablica korisnika</a></li>
                    </ul>
                </div>

            <form action="/admin/create" method="POST">
                @csrf
                    <div class="row justify-content-center">
                        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                                    <h3 class="h1naslov">Registracija korisnika</h3>
                                <div class="panel-body">
                                    <form role="form">

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="ime" id="ime" value="{{ old('ime') }}" placeholder="Ime" class="form-control input-sm @error('ime') border-danger" @enderror">
                                                    @error('ime')
                                                    <div class="upozorenje">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <input type="text" name="prezime" id="prezime" value="{{ old('prezime') }}" placeholder="Prezime" class="form-control input-sm @error('prezime') border-danger" @enderror">
                                                    @error('prezime')
                                                    <div class="upozorenje">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="primjer@mail.com" class="form-control input-sm @error('email') border-danger" @enderror">
                                                    @error('email')
                                                    <div class="upozorenje">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                <div class="form-group">
                                                    <input type="password" name="password" id="password" placeholder="Lozinka" class="form-control input-sm @error('password') border-danger" @enderror">
                                                    @error('password')
                                                    <div class="upozorenje">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>


                                        <select style="margin-bottom: 20px;" class="form-control" name="vrstakorisnika" id="vrstakorisnika">
                                            <option value="Korisnik">Korisnik</option>
                                            <option value="Admin">Admin</option>
                                        </select>

                                        <input type="submit" value="Registriraj se" class="btn btn-info btn-block">

                                    </form>
                                </div>

                        </div>
                    </div>
            </form>

        </div>
    </div>


@endsection
