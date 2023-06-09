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

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::resource('posts', PostController::class);

Route::resource('users', UserController::class);

//Route::resource('connexions', ConnexionController::class);

// Route::resource('connections', App\Http\Controllers\API\ConnectionAPIController::class);
// Route::resource('voitures', App\Http\Controllers\VoitureController::class);
// Route::resource('connections', App\Http\Controllers\ConnectionController::class);
// Route::resource('fiches', App\Http\Controllers\FicheController::class);
// Route::resource('personnes', App\Http\Controllers\personneController::class);
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
});
//Route::resource('clients',App\Http\Controllers\ClientController::class);
Route::post('/clients', 'ClientController@store')->name('clients.store');
Route::group(['middleware' => 'auth'], function () {
    Route::resource('clients', ClientController::class);

   // Route::resource('users', \App\Http\Controllers\UsersController::class);
});

Route::any('/search',function(){
    $q = request()->input('q');
    $client = Client::where('entreprise','LIKE','%'.$q.'%')->orWhere('pays','LIKE','%'.$q.'%')->get();
    if(count($client) > 0)
        return view('welcome')->withDetails($client)->withQuery ( $q );
    else return view ('welcome')->withMessage('No Details found. Try to search again !');
});
