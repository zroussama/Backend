<?php

namespace App\Repositories;

use App\Models\Fichier;
use App\Repositories\BaseRepository;

class FichierRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'nomFichier',
        'dateFichier',
        'idFichier'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Fichier::class;
    }
}
