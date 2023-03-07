<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fiche extends Model
{
    //Relation entre Fiche et Contact ||   1 Fiche --> n contact  
    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    //Relation entre Facturation et Fiche 
    public function facturation()
    {
        return $this->hasOne('App\Models\CMK');
    }

    // Relation entre Fiche et Connexion
    public function connexion()
    {
        return $this->hasOne('App\Models\Connexion');
    }

    

    // Colonnes Fiches
    public $table = 'fiches';

    public $fillable = [
        'entreprise',
        'domaine_activite',
        'gerant_nom',
        'gerant_prenom',
        'gerant_tel',
        'gerant_email',
        'autre_nom',
        'autre_prenom',
        'autre_tel',
        'autre_email',
        'autre_fonction',
        'Pays_Origine',
        'Ville_Origine',
        'Prod_pays',
        'prod_ville',
        'Prod_adress',
        'Origin_adress',
        'logo'
    ];

    protected $casts = [
        'entreprise' => 'string',
        'domaine_activite' => 'string',
        'gerant_nom' => 'string',
        'gerant_prenom' => 'string',
        'gerant_tel' => 'integer',
        'gerant_email' => 'string',
        'autre_nom' => 'string',
        'autre_prenom' => 'string',
        'autre_tel' => 'integer',
        'autre_email' => 'string',
        'autre_fonction' => 'string',
        'Pays_Origine' => 'string',
        'Ville_Origine' => 'string',
        'Prod_pays' => 'string',
        'prod_ville' => 'string',
        'Prod_adress' => 'string',
        'Origin_adress' => 'string',
        'logo' => 'string'
    ];

    public static array $rules = [
        
    ];

    
}
