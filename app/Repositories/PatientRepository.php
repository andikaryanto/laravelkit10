<?php

namespace App\Repositories;

use App\Models\Patient;
use App\Models\Village;
use App\ViewModels\PatientCollection;
use App\ViewModels\VillageCollection;
use App\ViewModels\VillageViewModel;
use LaravelCommon\App\Repositories\Repository;

class PatientRepository extends Repository
{
    /**
    * Constrcutor
    */
    public function __construct()
    {
        parent::__construct(Patient::class);
    }

    /**
     * @inheritDoc
     *
     * @return string
     */
    public function collectionClass(): string
    {
        return PatientCollection::class;
    }

    /**
     * @inheritDoc
     *
     * @return stirng
     */
    public function viewModelClass(): string
    {
        return PatientV::class;
    }
}
