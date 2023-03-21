<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fichier extends Model
{
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

        // ------------------------------------------------------------
        
    /**
     *        _  _   _       _ _         _      
     *       /_\| |_| |_ _ _(_) |__ _  _| |_ ___
     *      / _ \  _|  _| '_| | '_ \ || |  _(_-<
     *     /_/ \_\__|\__|_| |_|_.__/\_,_|\__/__/                              
     * 
     */
    

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
