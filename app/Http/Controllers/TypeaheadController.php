<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Connexion;
use App\Models\User;
use Illuminate\Http\Request;

class TypeaheadController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function autocompleteSearch(Request $request)
    {
        $query = $request->get('query');
        $filterResult = User::where('name', 'LIKE', '%' . $query . '%')
            ->select('name')
            ->union(Client::where('entreprise', 'LIKE', '%' . $query . '%')->select('entreprise'))
            ->union(Connexion::where('Link', 'LIKE', '%' . $query . '%')->select('entreprise'))
            ->get();
        return response()->json($filterResult);
    }
}
