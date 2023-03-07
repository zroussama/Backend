<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateFichierAPIRequest;
use App\Http\Requests\API\UpdateFichierAPIRequest;
use App\Models\Fichier;
use App\Repositories\FichierRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;

/**
 * Class FichierAPIController
 */
class FichierAPIController extends AppBaseController
{
    private FichierRepository $fichierRepository;

    public function __construct(FichierRepository $fichierRepo)
    {
        $this->fichierRepository = $fichierRepo;
    }

    /**
     * Display a listing of the Fichiers.
     * GET|HEAD /fichiers
     */
    public function index(Request $request): JsonResponse
    {
        $fichiers = $this->fichierRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($fichiers->toArray(), 'Fichiers retrieved successfully');
    }

    /**
     * Store a newly created Fichier in storage.
     * POST /fichiers
     */
    public function store(CreateFichierAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        $fichier = $this->fichierRepository->create($input);
        

        return $this->sendResponse($fichier->toArray(), 'Fichier saved successfully');
    }

    /**
     * Display the specified Fichier.
     * GET|HEAD /fichiers/{id}
     */
    public function show($id): JsonResponse
    {
        /** @var Fichier $fichier */
        $fichier = $this->fichierRepository->find($id);

        if (empty($fichier)) {
            return $this->sendError('Fichier not found');
        }

        return $this->sendResponse($fichier->toArray(), 'Fichier retrieved successfully');
    }

    /**
     * Update the specified Fichier in storage.
     * PUT/PATCH /fichiers/{id}
     */
    public function update($id, UpdateFichierAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        /** @var Fichier $fichier */
        $fichier = $this->fichierRepository->find($id);

        if (empty($fichier)) {
            return $this->sendError('Fichier not found');
        }

        $fichier = $this->fichierRepository->update($input, $id);

        return $this->sendResponse($fichier->toArray(), 'Fichier updated successfully');
    }

    /**
     * Remove the specified Fichier from storage.
     * DELETE /fichiers/{id}
     *
     * @throws \Exception
     */
    public function destroy($id): JsonResponse
    {
        /** @var Fichier $fichier */
        $fichier = $this->fichierRepository->find($id);

        if (empty($fichier)) {
            return $this->sendError('Fichier not found');
        }

        $fichier->delete();

        return $this->sendSuccess('Fichier deleted successfully');
    }
}
