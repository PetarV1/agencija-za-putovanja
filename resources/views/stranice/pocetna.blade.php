@extends('layouts.app')

@section('content')
    <section id="ponuda">
        <div class="container">
            <div class="title">
                <h1>NAJPOPULARNIJE DESTINACIJE</h1>
                <hr style="padding-bottom: 30px;">
            </div>
            <div class="row print-container">
                <div class="col-md-4">
                    <div class="card text-center">
                        <img src="images/barcelona.jpg" class="card img-top">
                        <div class="icons">
                            <ul class="toolliptext">
                                <li> <i class="fas fa-bed"></i></li>
                                <li> <i class="fas fa-utensils"></i></li>
                                <li> <i class="fas fa-users"></i></li>
                                <li> <i class="fas fa-biking"></i></li>
                            </ul>
                        </div>
                        <div class="cijena">
                            <p>45€</p>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">BARCELONA</h5>
                            <p class="card-text">Doživi Barcelonu na pravi način, prepustite se lokalnom načinu života, uživajte u egzotičnoj hrani i upoznajte novu kulturu.</p>
                            @auth()<a href="/checkout/1/putovanje">REZERVIRAJ</a>@endauth
                            @guest <p style="color: darkred; font-weight: bold">Za rezervaciju se morate prijaviti.</p> @endguest
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <img src="images/maldivi.jpg" class="card img-top">
                        <div class="icons">
                            <ul class="toolliptext">
                                <li> <i class="fas fa-bed"></i></li>
                                <li> <i class="fas fa-utensils"></i></li>
                                <li> <i class="fas fa-users"></i></li>
                                <li> <i class="fas fa-biking"></i></li>
                            </ul>
                        </div>
                        <div class="cijena">
                            <p>50€</p>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">MALDIVI</h5>
                            <p class="card-text">Doživi Maldive na pravi način, prepustite se lokalnom načinu života, uživajte u egzotičnoj hrani i upoznajte novu kulturu.</p>
                            @auth()<a href="/checkout/2/putovanje">REZERVIRAJ</a>@endauth
                            @guest <p style="color: darkred; font-weight: bold">Za rezervaciju se morate prijaviti.</p> @endguest
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <img src="images/budva.jpg" class="card img-top">
                        <div class="icons">
                            <ul>
                                <li> <i class="fas fa-bed"></i></li>
                                <li> <i class="fas fa-utensils"></i></li>
                                <li> <i class="fas fa-users"></i></li>
                                <li> <i class="fas fa-biking"></i></li>
                            </ul>
                        </div>
                        <div class="cijena">
                            <p>20€</p>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">BUDVA</h5>
                            <p class="card-text">Doživi Budvu na pravi način, prepustite se lokalnom načinu života, uživajte u domaćoj hrani i upoznajte novu kulturu.</p>
                            @auth()<a href="/checkout/3/putovanje">REZERVIRAJ</a>@endauth
                            @guest <p style="color: darkred; font-weight: bold">Za rezervaciju se morate prijaviti.</p> @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="card text-center">
                        <img src="images/bora bora.jpg" class="card img-top">
                        <div class="icons">
                            <ul>
                                <li> <i class="fas fa-bed"></i></li>
                                <li> <i class="fas fa-utensils"></i></li>
                                <li> <i class="fas fa-users"></i></li>
                                <li> <i class="fas fa-biking"></i></li>
                            </ul>
                        </div>
                        <div class="cijena">
                            <p>60€</p>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">BORA BORA</h5>
                            <p class="card-text">Doživi Bora Boru na pravi način, prepustite se lokalnom načinu života, uživajte u egzotičnoj hrani i upoznajte novu kulturu.</p>
                            @auth()<a href="/checkout/4/putovanje">REZERVIRAJ</a>@endauth
                            @guest <p style="color: darkred; font-weight: bold">Za rezervaciju se morate prijaviti.</p> @endguest
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <img src="images/istanbul.jpg" class="card img-top">
                        <div class="icons">
                            <ul>
                                <li> <i class="fas fa-bed"></i></li>
                                <li> <i class="fas fa-utensils"></i></li>
                                <li> <i class="fas fa-users"></i></li>
                                <li> <i class="fas fa-biking"></i></li>
                            </ul>
                        </div>
                        <div class="cijena">
                            <p>25€</p>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">ISTANBUL</h5>
                            <p class="card-text">Doživi Istanbul na pravi način, prepustite se lokalnom načinu života, uživajte u egzotičnoj hrani i upoznajte novu kulturu.</p>
                            @auth()<a href="/checkout/5/putovanje">REZERVIRAJ</a>@endauth
                            @guest <p style="color: darkred; font-weight: bold">Za rezervaciju se morate prijaviti.</p> @endguest
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <img src="images/punta cana.jpg" class="card img-top">
                        <div class="icons">
                            <ul>
                                <li> <i class="fas fa-bed"></i></li>
                                <li> <i class="fas fa-utensils"></i></li>
                                <li> <i class="fas fa-users"></i></li>
                                <li> <i class="fas fa-biking"></i></li>
                            </ul>
                        </div>
                        <div class="cijena">
                            <p>55€</p>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">PUNTA CANA</h5>
                            <p class="card-text">Doživi Punta Canu na pravi način, prepustite se lokalnom načinu života, uživajte u egzotičnoj hrani i upoznajte novu kulturu.</p>
                            @auth()<a href="/checkout/6/putovanje">REZERVIRAJ</a>@endauth
                            @guest <p style="color: darkred; font-weight: bold">Za rezervaciju se morate prijaviti.</p> @endguest
                        </div>
                    </div>
                </div>
            </div>


            <h5>ISPRINTAJ PONUDU</h5>
            <button class="printgumb" onclick="window.print();">
                Print
            </button>
        </div>
    </section>

    <div class="tehnologije">
        <h1 class="title" style="color: white;">Tehnologije koje smo koristili</h1>
        <hr>

        <div class="container">
            <ul>

                <img src="images/htmllogo.png" style="width: 60px; height: 50px;">
                <li>HTML</li>
                <img src="images/csslogo.png" style="width: 40px; height: 50px;">
                <li>CSS</li>
                <img src="images/bootstraplogo.png" style="width: 50px; height: 40px;">
                <li>Bootstrap</li>
                <img src="images/phplogo.png" style="width: 50px; height: 40px;">
                <li>PHP</li>
                <img src="images/mysqllogo.png" style="width: 80px; height: 60px;">
                <li>MySQL</li>
                <img src="images/javascriptlogo.png" style="width: 90px; height: 50px;">
                <li>JavaScript</li>
            </ul>

        </div>

    </div>
@endsection
