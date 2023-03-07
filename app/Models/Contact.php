<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // Relation entre Fiche et Contact 1àn
    public function fiche()
    {
        return $this->belongsTo(Fiche::class);
    }

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
