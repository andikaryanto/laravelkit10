<?php

namespace App\Repositories;

use App\Models\Village;
use App\ViewModels\VillageCollection;
use App\ViewModels\VillageViewModel;
use LaravelCommon\App\Repositories\Repository;

class VillageRepository extends Repository
{
    /**
    * Constrcutor
    */
    public function __construct()
    {
        parent::__construct(Village::class);
    }

    /**
     * @inheritDoc
     *
     * @return string
     */
    public function collectionClass(): string
    {
        return VillageCollection::class;
    }

    /**
     * @inheritDoc
     *
     * @return stirng
     */
    public function viewModelClass(): string
    {
        return VillageViewModel::class;
    }
}
