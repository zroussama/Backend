<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{    /**
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

       /**
    *      ___     _      _   _          
    *     | _ \___| |__ _| |_(_)___ _ _  
    *     |   / -_) / _` |  _| / _ \ ' \ 
    *     |_|_\___|_\__,_|\__|_\___/_||_|
    */
    // ------------------------------------------------------------

    //-------------------------------------------------------------
    /**
     *        _  _   _       _ _         _      
     *       /_\| |_| |_ _ _(_) |__ _  _| |_ ___
     *      / _ \  _|  _| '_| | '_ \ || |  _(_-<
     *     /_/ \_\__|\__|_| |_|_.__/\_,_|\__/__/                              
     * 
     */
    
    public $table = 'portfolios';

    public $fillable = [
        'contrat',
        'date_contrat',
        'kbis',
        'autre_fichier',
        'trigger'
    ];

    protected $casts = [
        'contrat' => 'string',
        'date_contrat' => 'date',
        'kbis' => 'string',
        'autre_fichier' => 'string',
        'trigger' => 'boolean'
    ];

    public static array $rules = [
        
    ];
// Ajouter methode ancienne ne marche pas 
//TODO #1 
    public function ajouterFichier($nomFichier, $chemin, $dateFichier) {
        $fichier = new Fichier([
            'nomFichier' => $nomFichier,
            'chemin' => $chemin,
            'dateFichier' => $dateFichier
        ]);
        $this->fichiers()->save($fichier);
    }
}
