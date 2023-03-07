<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Connexion extends Model
{

    public function fiches()
    {
        return $this->belongsTo('App\Models\Fiche');
    }
    
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
