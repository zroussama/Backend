<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ConnexionController;
use App\Http\Controllers\Admin\ArticlesController;
use App\Http\Controllers\ClientController;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\SearchController;


Route::get('/', function () {
    return view('dashboard');
});

Route::resource('users', UserController::class);

//Route::resource('connexions', ConnexionController::class);
// Route::resource('connections', App\Http\Controllers\ConnectionController::class);
// Route::resource('fiches', App\Http\Controllers\FicheController::class);
// Route::resource('portfolios', App\Http\Controllers\portfolioController::class);

// Route::resource('c-m-k-s', App\Http\Controllers\CMKController::class);

Route::resource('connexions', App\Http\Controllers\ConnexionController::class);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/portfolio', function () {
        return view('portfolio');
    })->name('portfolio');
    Route::post('/portfolios', [PortfolioController::class, 'store'])->name('portfolios.store');
    Route::get('/portfolios', [PortfolioController::class, 'index'])->name('portfolios.index');
    Route::get('/portfolios/create', [PortfolioController::class, 'create'])->name('portfolios.create');
    Route::delete('/portfolios/{id}', [PortfolioController::class, 'destroy'])->name('portfolios.destroy');

    Route::resource('clients', ClientController::class);
    Route::post('/clients', 'ClientController@store')->name('clients.store');
    Route::get('/clients/{client}', [ClientController::class, 'show'])->name('clients.show');

    Route::get('/search', [SearchController::class, 'search'])->name('search');
});

//Route::resource('clients',App\Http\Controllers\ClientController::class);

// Route::group(['middleware' => 'auth'], function () {
//     Route::resource('clients', ClientController::class);
// });

// Route::any('/search', function () {
//     $q = request()->input('q');
