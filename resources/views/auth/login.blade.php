@extends('layouts.app')

@section('content')

    <div class="pozadina">
        <form method="POST" action="/login">
            @csrf

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading text-center">
                                <h3 class="panel-title pt">Prijavi se u sustav</h3>
                            </div>
                            <div class="panel-body">
                                <form role="form">

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

                                    <input type="submit" value="Prijava" class="btn btn-info btn-block">

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

@endsection
