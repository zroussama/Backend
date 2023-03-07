<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CMK extends Model
{

    use SoftDeletes;

      /**
     * The primary key associated with the table.
     *
     * @var string
     */

    public $table = 'facturations';

    public function fiche()
    {
        return $this->belongsTo(Fiche::class);
    }

    public $fillable = [
        'CMK_ID',
        'Facturation'
    ];

    protected $casts = [
        'CMK_ID' => 'string',
        'Facturation' => 'string'
    ];

    public static array $rules = [
        'CMK_ID' => 'required'
    ];

    protected $primaryKey = 'idCMK';

    
}
