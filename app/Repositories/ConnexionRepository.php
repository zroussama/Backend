<?php

namespace App\Repositories;

use App\Models\Connexion;
use App\Repositories\BaseRepository;

class ConnexionRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'idConnexion',
        'name',
        'domain',
        'port',
        'link',
        'username',
        'password',
        'rememberToken'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Connexion::class;
    }
}
