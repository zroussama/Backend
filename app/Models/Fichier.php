<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fichier extends Model
{
    public $table = 'fichiers';

    public $fillable = [
        'nomFichier',
        'dateFichier',
        'idFichier'
    ];

    protected $casts = [
        'dateFichier' => 'date',
        'idFichier' => 'integer'
    ];

    public static array $rules = [
        
    ];

    
}
