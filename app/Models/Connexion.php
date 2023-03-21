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
    //____________________________________________________________________________________________________Search Query ( Search data with relation tables columns)______________________
    
    public function scopeSearch($query, $keyword, $columns = [], $relationMapping = [])
    {
    
    // if you pass empty column list then it automatically get all table column or fillable column    
        if (empty($columns)) {
        
    // 1) get all table column

    //            $columns = array_except(
    //                Schema::getColumnListing($this->table), $this->guarded
    //            );
    
    // 2) get fillable column
            $columns = $this->fillable;
        }

        $query->where(function ($query) use ($keyword, $columns, $relationMapping) {
            foreach ($columns as $key => $column) {
                $clause = $key == 0 ? 'where' : 'orWhere';
                $query->$clause($this->table.'.'.$column, "LIKE", "%{$keyword}%");

                if (!empty($relationMapping)) {
                    $this->filterByRelationship($query, $keyword, $relationMapping);
                }
            }
        });
        return $query;
    }

    private function filterByRelationship($query, $keyword, $relativeTables)
    {
        foreach ($relativeTables as $relationship => $relativeColumns) {
            $query->orWhereHas($relationship, function($relationQuery) use ($keyword, $relativeColumns) {
                foreach ($relativeColumns as $key => $column) {
                    $clause = $key == 0 ? 'where' : 'orWhere';
                    $relationQuery->$clause($column, "LIKE", "%$keyword%");
                }
            });
        }
        return $query;
    }
    // add this code in controller 


    // this is array of relation_name and its columns/fields
    
   // $relationMapping = [
   //     'relation_1' => ['column_1', 'column_2', 'column_3'],
   //     'relation_2' => ['column_1', 'column_2' ],
   //     'relation_2' => ['column_1', 'column_2' ]
   // ];

       // pass 3 data in this function 1. search_keyword 2.column_array or null array 3. relationMapping array
    
    //   Model::search("search_string", [], $relationMapping)->get();
    
    ///____________________________________________________________________________________________________Basic Search_____________________
    
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
