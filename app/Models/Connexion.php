<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Connexion extends Model
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


    public function fiches()
    {
        return $this->belongsTo('App\Models\Fiche');
    }
        // ------------------------------------------------------------
            /**
     *        _  _   _       _ _         _      
     *       /_\| |_| |_ _ _(_) |__ _  _| |_ ___
     *      / _ \  _|  _| '_| | '_ \ || |  _(_-<
     *     /_/ \_\__|\__|_| |_|_.__/\_,_|\__/__/                              
     * 
     */
    
    public $table = 'connexions';

    public $fillable = [
        'connexion_id',
        'TYPE_HEBERGEMENT'=>'enum', 
        'PROMISE_CASE'=>'enum', 
        'STATUS'=>'enum', 
        'name',
        'domain',
        'port',
        'link',
        'username',
        'password',
        'rememberToken'
    ];

    protected $casts = [
        'connexion_id' => 'integer',
        'TYPE_HEBERGEMENT'=>'enum', 
        'PROMISE_CASE'=>'enum', 
        'STATUS'=>'boolean', 
        'name' => 'string',
        'domain' => 'string',
        'port' => 'integer',
        'link' => 'string',
        'username' => 'string',
        'password' => 'string',
        'rememberToken' => 'string'
    ];

    public static array $rules = [
        
    ];

    
}
