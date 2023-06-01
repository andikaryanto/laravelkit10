<?php

namespace App\Http\Middleware\Hydrators;

use App\Repositories\VillageRepository;
use LaravelCommon\App\Http\Middleware\Hydrator;

class VillageHydrator extends Hydrator
{
    public const NAME = 'app.middleware.hydrators.village';

    public function __construct(
        VillageRepository $villageRepository
    ) {
        parent::__construct('village', $villageRepository);
    }

    /**
     * @inheritDoc
     */
    public function hydrate()
    {
        $this->when(
            'name',
            [$this->model, 'setName']
        )->when(
            'district_name',
            [$this->model, 'setDistrictName']
        )->when(
            'city_name',
            [$this->model, 'setCityName']
        );
    }
}
