<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    public $table = 'portfolios';

    public $fillable = [
        'contrat',
        'date_contrat',
        'kbis',
        'autre_fichier',
        'notification'
    ];

    protected $casts = [
        'contrat' => 'string',
        'date_contrat' => 'date',
        'kbis' => 'string',
        'autre_fichier' => 'string',
        'notification' =>'boolean'
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
    public function notifier($contrat, $dateFichier, $notification) {
        $fichier = new Fichier([
            'contrat' => $contrat,
            'dateFichier' => $dateFichier,
            'notification' => $notification
        ]);
        $this->fichiers()->save($fichier);
    }
}
