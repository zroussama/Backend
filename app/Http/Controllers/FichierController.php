<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFichierRequest;
use App\Http\Requests\UpdateFichierRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\FichierRepository;
use Illuminate\Http\Request;
use Flash;

class FichierController extends AppBaseController
{
    /** @var FichierRepository $fichierRepository*/
    private $fichierRepository;

    public function __construct(FichierRepository $fichierRepo)
    {
        $this->fichierRepository = $fichierRepo;
    }

    /**
     * Display a listing of the Fichier.
     */
    public function index(Request $request)
    {
        $fichiers = $this->fichierRepository->paginate(10);

        return view('fichiers.index')
            ->with('fichiers', $fichiers);
    }

    /**
     * Show the form for creating a new Fichier.
     */
    public function create()
    {
        return view('fichiers.create');
    }

    /**
     * Store a newly created Fichier in storage.
     */
    public function store(CreateFichierRequest $request)
    {
        $input = $request->all();

        $fichier = $this->fichierRepository->create($input);

        Flash::success('Fichier saved successfully.');

        return redirect(route('fichiers.index'));
    }

    /**
     * Display the specified Fichier.
     */
    public function show($id)
    {
        $fichier = $this->fichierRepository->find($id);

        if (empty($fichier)) {
            Flash::error('Fichier not found');

            return redirect(route('fichiers.index'));
        }

        return view('fichiers.show')->with('fichier', $fichier);
    }

    /**
     * Show the form for editing the specified Fichier.
     */
    public function edit($id)
    {
        $fichier = $this->fichierRepository->find($id);

        if (empty($fichier)) {
            Flash::error('Fichier not found');

            return redirect(route('fichiers.index'));
        }

        return view('fichiers.edit')->with('fichier', $fichier);
    }

    /**
     * Update the specified Fichier in storage.
     */
    public function update($id, UpdateFichierRequest $request)
    {
        $fichier = $this->fichierRepository->find($id);

        if (empty($fichier)) {
            Flash::error('Fichier not found');

            return redirect(route('fichiers.index'));
        }

        $fichier = $this->fichierRepository->update($request->all(), $id);

        Flash::success('Fichier updated successfully.');

        return redirect(route('fichiers.index'));
    }

    /**
     * Remove the specified Fichier from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $fichier = $this->fichierRepository->find($id);

        if (empty($fichier)) {
            Flash::error('Fichier not found');

            return redirect(route('fichiers.index'));
        }

        $this->fichierRepository->delete($id);

        Flash::success('Fichier deleted successfully.');

        return redirect(route('fichiers.index'));
    }
}
