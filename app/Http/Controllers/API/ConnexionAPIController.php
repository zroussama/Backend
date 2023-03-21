<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreateConnexionAPIRequest;
use App\Http\Requests\API\UpdateConnexionAPIRequest;
use App\Models\Connexion;
use App\Repositories\ConnexionRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;

/**
 * Class ConnexionAPIController
 */
class ConnexionAPIController extends AppBaseController
{
    private ConnexionRepository $connexionRepository;

    public function __construct(ConnexionRepository $connexionRepo)
    {
        $this->connexionRepository = $connexionRepo;
    }


    
    /**
     * Display a listing of the Connexions.
     * GET|HEAD /connexions
     */
    public function index(Request $request): JsonResponse
    {
        $connexions = $this->connexionRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($connexions->toArray(), 'Connexions retrieved successfully');
    }

    /**
     * Store a newly created Connexion in storage.
     * POST /connexions
     */
    public function store(CreateConnexionAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        $connexion = $this->connexionRepository->create($input);

        // Retrieve the input values from the request
        $name = $request->input('name');
        $domain = $request->input('domain');
        $port = $request->input('port');

    // Concatenate the values into a single string
        $link = $name . '.' . $domain . ':' . $port;

    // Create a new Connexion instance with the concatenated link
        $connexion = new Connexion;
        $connexion->link = $link;
        $connexion->save();

        return $this->sendResponse($connexion->toArray(), 'Connexion saved successfully');
    }

    /**
     * Display the specified Connexion.
     * GET|HEAD /connexions/{id}
     */
    public function show($id): JsonResponse
    {
        /** @var Connexion $connexion */
        $connexion = $this->connexionRepository->find($id);

        if (empty($connexion)) {
            return $this->sendError('Connexion not found');
        }

        return $this->sendResponse($connexion->toArray(), 'Connexion retrieved successfully');
    }

    /**
     * Update the specified Connexion in storage.
     * PUT/PATCH /connexions/{id}
     */
    public function update($id, UpdateConnexionAPIRequest $request): JsonResponse
    {
        $input = $request->all();

        /** @var Connexion $connexion */
        $connexion = $this->connexionRepository->find($id);

        if (empty($connexion)) {
            return $this->sendError('Connexion not found');
        }

        $connexion = $this->connexionRepository->update($input, $id);

        return $this->sendResponse($connexion->toArray(), 'Connexion updated successfully');
    }

    /**
     * Remove the specified Connexion from storage.
     * DELETE /connexions/{id}
     *
     * @throws \Exception
     */
    public function destroy($id): JsonResponse
    {
        /** @var Connexion $connexion */
        $connexion = $this->connexionRepository->find($id);

        if (empty($connexion)) {
            return $this->sendError('Connexion not found');
        }

        $connexion->delete();

        return $this->sendSuccess('Connexion deleted successfully');
    }
}
