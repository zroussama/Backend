<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    public $table = 'portfolios1';

    public $fillable = [
        'contrat',
        'date_contrat',
        'kbis',
        'autre_fichier'
    ];

    protected $casts = [
        'contrat' => 'string',
        'date_contrat' => 'date',
        'kbis' => 'string',
        'autre_fichier' => 'string'
    ];

    public static array $rules = [
        
    ];

    public function ajouterFichier($nomFichier, $chemin, $dateFichier) {
        $fichier = new Fichier([
            'nomFichier' => $nomFichier,
            'chemin' => $chemin,
            'dateFichier' => $dateFichier
        ]);
        $this->fichiers()->save($fichier);
    }
}
