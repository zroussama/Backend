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
Route::get('/clients/{client}', [ClientController::class, 'show'])->name('clients.show');

Route::get('/search', [SearchController::class, 'search'])->name('search');
// Route::any('/search', function () {
//     $q = request()->input('q');

//     // Recherche des clients
//     $clients = App\Models\Client::where('nom', 'LIKE', '%' . $q . '%')
//         ->orWhere('entreprise', 'LIKE', '%' . $q . '%')
//         ->orWhere('tel', 'LIKE', '%' . $q . '%')
//         ->orWhere('email', 'LIKE', '%' . $q . '%')
//         // Ajoutez d'autres conditions pour les champs de recherche des clients
//         ->paginate(10);

//     // Recherche des connexions
//     $connexions = App\Models\Connexion::where('connexion_id', 'LIKE', '%' . $q . '%')
//         ->orWhere('TYPE_HEBERGEMENT', 'LIKE', '%' . $q . '%')
//         ->orWhere('PROMISE_CASE', 'LIKE', '%' . $q . '%')
//         ->orWhere('STATUS', 'LIKE', '%' . $q . '%')
//         ->orWhere('name', 'LIKE', '%' . $q . '%')
//         ->orWhere('domain', 'LIKE', '%' . $q . '%')
//         ->orWhere('port', 'LIKE', '%' . $q . '%')
//         ->orWhere('link', 'LIKE', '%' . $q . '%')
//         ->orWhere('username', 'LIKE', '%' . $q . '%')
//         ->orWhere('password', 'LIKE', '%' . $q . '%')
//         ->orWhere('rememberToken', 'LIKE', '%' . $q . '%')
//         // Ajoutez d'autres conditions pour les champs de recherche des connexions
//         ->paginate(10);

//     // Recherche des fiches
//     $fiches = App\Models\Fiche::where('entreprise', 'LIKE', '%' . $q . '%')
//         ->orWhere('domaine_activite', 'LIKE', '%' . $q . '%')
//         ->orWhere('gerant_nom', 'LIKE', '%' . $q . '%')
//         ->orWhere('gerant_prenom', 'LIKE', '%' . $q . '%')
//         ->orWhere('gerant_tel', 'LIKE', '%' . $q . '%')
//         ->orWhere('gerant_email', 'LIKE', '%' . $q . '%')
//         ->orWhere('autre_nom', 'LIKE', '%' . $q . '%')
//         ->orWhere('autre_prenom', 'LIKE', '%' . $q . '%')
//         ->orWhere('autre_tel', 'LIKE', '%' . $q . '%')
//         ->orWhere('autre_email', 'LIKE', '%' . $q . '%')
//         ->orWhere('autre_fonction', 'LIKE', '%' . $q . '%')
//         ->orWhere('Pays_Origine', 'LIKE', '%' . $q . '%')
//         ->orWhere('Ville_Origine', 'LIKE', '%' . $q . '%')
//         ->orWhere('Prod_pays', 'LIKE', '%' . $q . '%')
//         ->orWhere('prod_ville', 'LIKE', '%' . $q . '%')
//         ->orWhere('Prod_adress', 'LIKE', '%' . $q . '%')
//         ->orWhere('Origin_adress', 'LIKE', '%' . $q . '%')
//         ->orWhere('logo', 'LIKE', '%' . $q . '%')
//         // Ajoutez d'autres conditions pour les champs de recherche des fiches
//         ->paginate(10);

//     // Fusionner les résultats de recherche des différents modèles
//     $results = collect([$clients, $connexions, $fiches])->flatten();

//     if ($results->isNotEmpty()) {
//         return view('welcome')->withDetails($results)->withQuery($q);
//     } else {
//         return view('welcome')->withMessage('Aucun détail trouvé. Veuillez réessayer !');
//     }
// })->name('search');
