<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Connexion;
use Illuminate\Routing\Controller;
class CommonController extends Controller
{
    public function index()
    {
        $client = app(ClientController::class)->all(); // Retrieve data from Controller1
        $connexion = app(ConnexionController::class)->all();

        return view('common.index', compact('client','connexion'));
    }

}
