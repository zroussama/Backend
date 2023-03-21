<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fiche extends Model
{
            // ------------------------------------------------------------
    /**
     *    ___                  _    
     *   / __| ___ __ _ _ _ __| |_  
     *   \__ \/ -_) _` | '_/ _| ' \ 
     *   |___/\___\__,_|_| \__|_||_|
     *                       
     */
    public static function rechercher(Request $request)
    {
        $query = self::query();
    
        foreach ($request->all() as $key => $value) {
            if (!empty($value)) {
                $query->where($key, 'LIKE', '%'.$value.'%');
            }
        }
    
        return $query->get();
    }
            // ------------------------------------------------------------
    /**
    *      ___     _      _   _          
    *     | _ \___| |__ _| |_(_)___ _ _  
    *     |   / -_) / _` |  _| / _ \ ' \ 
    *     |_|_\___|_\__,_|\__|_\___/_||_|
    */
                                   
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

            // ------------------------------------------------------------
    /**
     *        _  _   _       _ _         _      
     *       /_\| |_| |_ _ _(_) |__ _  _| |_ ___
     *      / _ \  _|  _| '_| | '_ \ || |  _(_-<
     *     /_/ \_\__|\__|_| |_|_.__/\_,_|\__/__/                              
     * 
     */
    

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
        'entreprise' => 'required',
        'domaine_activite' => 'required',
        'gerant_nom' => 'required',
        'gerant_prenom' => 'required',
        'gerant_tel' => 'required',
        'gerant_email' => 'required',
        'autre_nom' => 'required',
        'autre_prenom' => 'required',
        'autre_tel' => 'required',
        'autre_email' => 'required',
        'autre_fonction' => 'required',
        'Pays_Origine' => 'required',
        'Ville_Origine' => 'required',
        'Prod_pays' => 'required',
        'prod_ville' => 'required',
        'Prod_adress' => 'required',
        'Origin_adress' => 'required',
        'logo' => 'required'
    ];

    
}
