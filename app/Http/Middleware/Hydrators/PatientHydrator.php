<?php

namespace App\Http\Middleware\Hydrators;

use App\Repositories\PatientRepository;
use App\Repositories\VillageRepository;
use LaravelCommon\App\Http\Middleware\Hydrator;

class PatientHydrator extends Hydrator
{
    public const NAME = 'app.middleware.hydrators.patient';

    /**
     *
     * @var VillageRepository
     */
    protected VillageRepository $villageRepository;

    /**
     * Undocumented function
     *
     * @param PatientRepository $patientRepository
     * @param VillageRepository $villageRepository
     */
    public function __construct(
        PatientRepository $patientRepository,
        VillageRepository $villageRepository
    ) {
        parent::__construct('patient', $patientRepository);
        $this->villageRepository = $villageRepository;
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
            'address',
            [$this->model, 'setAddress']
        )->when(
            'phone',
            [$this->model, 'setPhone']
        )->when(
            'rt',
            [$this->model, 'setRt']
        )->when(
            'rw',
            [$this->model, 'setRw']
        )->when(
            'date_of_birth',
            [$this->model, 'setDateOfBirth']
        )->when(
            'gender',
            [$this->model, 'setGender']
        )->when(
            'village.id',
            [$this->model, 'setVillage'],
            [$this->villageRepository, 'find']
        );
    }
}
