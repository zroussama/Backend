<?php
namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;

class AutocompleteController extends Controller
{
    public function index(){
        return view('autocomplete');
    }
    public function autocompleteSearch(Request $request){
        $query = $request->get('query');
        $filterResult = User::where('name','LIKE', '%' . $query . '%');
        $filterResult = Client::where('entreprise','LIKE', '%' . $query . '%');
        return response()->json($filterResult);
    }
    public function search(Request $request)
    {
        $searchTerm = $request->input('term');
        $models = $this->getModels();

        $results = [];

        foreach ($models as $model) {
            $tableName = $model->getTable();
            $columns = Schema::getColumnListing($tableName);

            $query = $model->query();
            foreach ($columns as $column) {
                $query->orWhere($column, 'LIKE', '%' . $searchTerm . '%');
            }

            $items = $query->get();

            foreach ($items as $item) {
                $results[] = [
                    'id' => $item->id,
                    'value' => $item->name, // Change this to the appropriate column name
                    'category' => $tableName
                ];
            }
        }

        return response()->json($results);
    }

    private function getModels()
    {
        $models = [];

        foreach (get_declared_classes() as $class) {
            if (is_subclass_of($class, Model::class)) {
                $models[] = new $class();
            }
        }

        return $models;
    }
}
