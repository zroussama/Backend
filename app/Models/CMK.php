<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CMK extends Model
{
    use SoftDeletes;

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

    //relation avec fiche des clients  
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


      /**
     * The primary key associated with the table.
     *
     * @var string
     */

    public $table = 'facturations';

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
