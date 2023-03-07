<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\CMKResource;
use App\Models\CMK;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
Route::post('connections/{id}/connecter', 'App\Http\Controllers\API\ConnexionAPIController@connecter');
Route::post('connections/{id}/deconnecter', 'App\Http\Controllers\API\ConnexionAPIController@deconnecter');
Route::post('connections/{id}/generer-file', 'App\Http\Controllers\API\ConnexionAPIController@genererFile');

Route::group(['prefix' => 'api'], function () {
    Route::get('connections', [App\Http\Controllers\API\ConnectionAPIController::class, 'index']);
    Route::post('connections', [App\Http\Controllers\API\ConnectionAPIController::class, 'store']);
    Route::get('connections/{id}', [App\Http\Controllers\API\ConnectionAPIController::class, 'show']);
    Route::put('connections/{id}', [App\Http\Controllers\API\ConnectionAPIController::class, 'update']);
    Route::delete('connections/{id}', [App\Http\Controllers\API\ConnectionAPIController::class, 'destroy']);
});

Route::group(['prefix' => 'api'], function () {
    Route::resource('connections', 'App\Http\Controllers\API\ConnectionAPIController')->middleware('auth:api');
});
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::resource('fiches', App\Http\Controllers\API\FicheAPIController::class);
    

   

Route::resource('portfolios', App\Http\Controllers\API\portfolioAPIController::class);


Route::resource('cmk', App\Http\Controllers\API\CMKAPIController::class);



Route::resource('connexions', App\Http\Controllers\API\ConnexionAPIController::class);

Route::resource('clients', App\Http\Controllers\API\ClientAPIController::class)
    ->except(['create', 'edit']);

Route::resource('contacts', App\Http\Controllers\API\ContactAPIController::class)
    ->except(['create', 'edit']);

Route::resource('fichiers', App\Http\Controllers\API\FichierAPIController::class)
    ->except(['create', 'edit']);