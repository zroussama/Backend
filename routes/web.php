<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TypeaheadController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\FicheController;
use App\Http\Controllers\SuchenController;

Route::get('/', function () {
    return view('dashboard');
});

Route::resource('users', UserController::class);





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');


    Route::resource('connexions', ConnexionController::class);
    Route::get('/connexions/{connexion}', [ConnexionController::class, 'show'])->name('connexions.show');
    Route::resource('portfolios', PortfolioController::class)->except(['show']);
    Route::get('/portfolios/{portfolio}', [PortfolioController::class, 'show'])->name('portfolios.show');
    Route::resource('contacts', ContactController::class)->except(['show']);
    Route::get('/contacts/{contact}', [ContactController::class, 'show'])->name('contacts.show');
    Route::resource('clients', ClientController::class);
    Route::get('/clients/{client}', [ClientController::class, 'show'])->name('clients.show');
    Route::get('/search', [SearchController::class, 'search'])->name('search');
    Route::resource('fiches', FicheController::class);
    //Search here
    Route::get('/home', [TypeaheadController::class, 'index']);
    Route::get('/autocomplete-search', [TypeaheadController::class, 'autocompleteSearch']);
    //suchenController
    Route::get('/suchen/simple', [ClientController::class, 'simple'])->name('simple_search');
    Route::get('/suchen/advance', [ClientController::class, 'advance'])->name('advance_search');
    Route::get('/suchen', [SuchenController::class, 'index']);

});
