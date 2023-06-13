<?php


namespace App\Http\Controllers;
use App\Models\Connexion;
use Illuminate\Http\Request;
class ConnexionController extends Controller
{
    public function index()
    {
        $connexions = Connexion::paginate(10);
        return view('connexions.index', compact('connexions'));
    }

    public function create()
    {
        $connexions = new Connexion;
        return view('connexions.create', compact('connexions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'TYPE_HEBERGEMENT'=>'required',
            'ONPREMISE_CASE'=>'required'
        ]);
        Connexion::create($request->all());
        return redirect()->route('connexions.index')
            ->with('success', 'Client coonnexion created successfully.');
    }

    public function show(Connexion $connexion)
    {
        return view('connexions.show', compact('connexion'));
    }
    public function edit(Connexion $connexion)
    {
        return view('connexions.edit', compact('connexion'));
    }
    public function update(Request $request, Connexion $connexion)
    {
        $connexion->update($request->validated());
        return redirect()->route('connexions.index');
    }
    public function destroy(Connexion $connexion)
    {
        $connexion->delete();

        return redirect()->route('connexions.index');
    }
}
