<?php


use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\RezervacijaController;
use Illuminate\Support\Facades\Route;

//Odjava
Route::post('/logout', [LogoutController::class, 'store'])->name('logout')->middleware('auth');

//Prijava
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store'])->middleware('guest');

//Registracija
Route::get('/register', [RegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'store'])->middleware('guest');

//Admin panel i kreiranje korisnika
Route::get('/admin', [AdminController::class, 'index'])->middleware('admin');
Route::get('/admin/create', [AdminController::class, 'store'])->middleware('admin');
Route::post('/admin/create', [AdminController::class, 'storeuser'])->middleware('admin');


//Odjava za admina
Route::post('/admin/logout', [AdminController::class, 'odjava'])->middleware('admin');

//Update(Azuriranje)
Route::get('/admin/{id}/update', [AdminController::class, 'edit'])->middleware('admin');
Route::post('/admin/{id}/update', [AdminController::class, 'update'])->middleware('admin');


//Brisanje
Route::get('/admin/{id}/delete', [AdminController::class, 'delete'])->middleware('admin');
//Search bar
Route::get('/search', [AdminController::class, 'search'])->middleware('admin');

//Ucitavanje putovanja
Route::get('/checkout/{id}/putovanje', [RezervacijaController::class, 'index'])->middleware('auth');
//Rezervacija putovanja
Route::post('/checkout/{id}/putovanje', [RezervacijaController::class, 'reservation'])->middleware('auth');

//Rezervacije korisnika
Route::get('/mojerezervacije', [RezervacijaController::class, 'mojerez'])->middleware('auth');
//Brisanje rezervacije
Route::get('/mojerezervacije/{id}', [RezervacijaController::class, 'delete'])->middleware('auth');


Route::get('/', function () {
    return view('stranice.pocetna');
});

Route::get('/aboutus', function () {
    return view('stranice.aboutus');
});

