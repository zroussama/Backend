<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Connexion;
use App\Models\Fiche;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $q = $request->input('q');

        $clients = Client::where('entreprise', 'LIKE', '%' . $q . '%')
            ->orWhere('pays', 'LIKE', '%' . $q . '%')
            ->orWhere('ville', 'LIKE', '%' . $q . '%')
            ->orWhere('adresse', 'LIKE', '%' . $q . '%')
            ->orWhere('tel', 'LIKE', '%' . $q . '%')
            ->get();

        $connexions = Connexion::where('name', 'LIKE', '%' . $q . '%')
            ->orWhere('TYPE_HEBERGEMENT', 'LIKE', '%' . $q . '%')
            ->orWhere('link', 'LIKE', '%' . $q . '%')
            ->orWhere('username', 'LIKE', '%' . $q . '%')
            ->get();

        $fiches = Fiche::where('entreprise', 'LIKE', '%' . $q . '%')
            ->orWhere('domaine_activite', 'LIKE', '%' . $q . '%')
            ->orWhere('gerant_nom', 'LIKE', '%' . $q . '%')
            ->orWhere('gerant_prenom', 'LIKE', '%' . $q . '%')
            ->orWhere('gerant_tel', 'LIKE', '%' . $q . '%')
            ->orWhere('gerant_email', 'LIKE', '%' . $q . '%')
            ->orWhere('autre_nom', 'LIKE', '%' . $q . '%')
            ->orWhere('autre_prenom', 'LIKE', '%' . $q . '%')
            ->orWhere('autre_tel', 'LIKE', '%' . $q . '%')
            ->orWhere('autre_email', 'LIKE', '%' . $q . '%')
            ->orWhere('autre_fonction', 'LIKE', '%' . $q . '%')
            ->orWhere('Pays_Origine', 'LIKE', '%' . $q . '%')
            ->orWhere('Ville_Origine', 'LIKE', '%' . $q . '%')
            ->orWhere('Prod_pays', 'LIKE', '%' . $q . '%')
            ->orWhere('prod_ville', 'LIKE', '%' . $q . '%')
            ->orWhere('Prod_adress', 'LIKE', '%' . $q . '%')
            ->orWhere('Origin_adress', 'LIKE', '%' . $q . '%')
            ->orWhere('logo', 'LIKE', '%' . $q . '%')
            // Ajoutez d'autres conditions pour les champs de recherche des fiches
            ->get();


        $results = collect([$clients, $connexions, $fiches])->flatten();

        if ($results->isNotEmpty()) {
            return view('search.index')->with('details', $results)->with('query', $q);
        } else {
            return view('search.index')->with('message', 'Aucun détail trouvé. Veuillez réessayer !');
        }
    }
}
