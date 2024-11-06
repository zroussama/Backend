<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

class SuchenController extends Controller
{
    public function index()
    {
        $data = \Illuminate\Support\Facades\DB::table('clients')->paginate(10);
        return view('search', compact('data'));
    }

    public function simple(Request $request)
    {
        $data = \Illuminate\Support\Facades\DB::table('clients');
        if( $request->input('search')){
            $data = $data->where('entreprise', 'LIKE', "%" . $request->search . "%");
        }
        $data = $data->paginate(10);
        return view('search', compact('data'));
    }

    public function advance(Request $request)
    {
        $data1 = \Illuminate\Support\Facades\DB::table('contacts');
        if( $request->email){
            $data1 = $data1->where('email', 'LIKE', "%" . $request->email . "%");
        }
        if( $request->fonction){
            $data1 = $data1->where('fonction', 'LIKE', "%" . $request->fonction . "%");
        }
        if( $request->nom){
            $data1 = $data1->where('nom', 'LIKE', "%" . $request->nom . "%");
        }
        if( $request->prenom){
            $data1 = $data1->where('prenom', 'LIKE', "%" . $request->prenom . "%");
        }
        if( $request->tel1){
            $data1 = $data1->where('tel1', 'LIKE', "%" . $request->tel1 . "%");
        }
        $data = \Illuminate\Support\Facades\DB::table('clients');
        if( $request->entreprise){
            $data = $data->where('entreprise', 'LIKE', "%" . $request->entreprise . "%");
        }
        if( $request->ville){
            $data = $data->where('ville', 'LIKE', "%" . $request->ville . "%");
        }
        if( $request->pays){
            $data = $data->where('pays', 'LIKE', "%" . $request->pays . "%");
        }
        if( $request->tel){
            $data = $data->where('tel', 'LIKE', "%" . $request->tel . "%");
        }
        // if( $request->min_age && $request->max_age ){
        //     $data = $data->where('age', '>=', $request->min_age)
        //                  ->where('age', '<=', $request->max_age);
        // }
        $data = $data->paginate(10);
        return view('search', compact('data','data1'));
    }

}
