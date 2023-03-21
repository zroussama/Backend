<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
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

    // Relation entre Fiche et Contact 1àn
    public function fiche()
    {
        return $this->belongsTo(Fiche::class);
    }

    //-------------------------------------------------------------
    /**
     *        _  _   _       _ _         _      
     *       /_\| |_| |_ _ _(_) |__ _  _| |_ ___
     *      / _ \  _|  _| '_| | '_ \ || |  _(_-<
     *     /_/ \_\__|\__|_| |_|_.__/\_,_|\__/__/                              
     * 
     */

    public $table = 'contacts';

    public $fillable = [
        
        'nom',
        'prenom',
        'fonction',
        'tel1',
        'tel2',
        'email'
    ];

    protected $casts = [
        'nom' => 'string',
        'prenom' => 'string',
        'fonction' => 'string',
        'tel1' => 'integer',
        'tel2' => 'integer',
        'email' => 'string'
    ];

    public static array $rules = [
        
    ];

    
}
