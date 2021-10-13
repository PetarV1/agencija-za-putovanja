<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/check.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Agencija za putovanja</title>
</head>
<body>

<header>
    <div class="pre-header">
        <div class="container-fluid">
            <div class="row">
                <div class="nav">
                    <img src="https://www.transparentpng.com/thumb/travel/Eqz7Dy-travel-world-transparent-logo.png" alt="travel world transparent logo @transparentpng.com" class="logo">
                    <ul>
                        @auth()
                            @if (Auth::user()->vrstakorisnika == 'Admin')
                                <li><a href="/admin">Admin Panel</a></li>
                            @endif
                        @endauth
                        @auth() <li><a href="/mojerezervacije">Moje rezervacije</a></li> @endauth
                        <li><a href="/aboutus">O nama</a></li>
                        <li><a href="/#ponuda">Destinacije</a></li>
                        <li class="free-quote-btn"><a href="https://drive.google.com/file/d/1qeE0pgi5vJgJHCK0xxQsjcm-Ya9z_7E8/view?usp=sharing">Vizija</a></li>
                    </ul>
                </div>

                <div class="content">
                    <div class="weather">
                        <a class="weatherwidget-io" href="https://forecast7.com/en/41d0128d98/istanbul/" data-label_1="İSTANBUL" data-label_2="WEATHER" data-mode="Current" data-days="3" data-theme="metallic" >İSTANBUL WEATHER</a>
                        <script>
                            !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                        </script>
                    </div>
                </div>

                <div class="content">
                    <h1>AGENCIJA ZA PUTOVANJA</h1>
                    <p>Putovanje od tisuću milja započinje prvim korakom.</p>
                    <div class="forme">

                        @auth()
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf <button class="odjavabtnglavna" type="submit">Odjava</button>
                            </form>
                        @endauth
                        @guest
                            <ul>
                                <li class="freebtn"><a href="{{ route('login') }}">Prijavi se</a></li>
                                <li class="freebtn"><a href="{{ route('register') }}">Registracija</a></li>
                            </ul>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

@yield('content')

<footer class="text-center text-lg-start bg-dark text-muted">
    <p>Copyright &copy; 2020</p>
</footer>

@if(session()->has('success'))
    <div x-data="{ show: true }"
         x-init="setTimeout(() => show = false, 4000)"
         x-show="show"
         class="uspjesnaregistracija">
        <p>{{ session('success') }}</p>
    </div>
@endif

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

</body>
</html>
