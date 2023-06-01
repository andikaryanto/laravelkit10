<?php

namespace App\ViewModels;

use App\Models\Patient;
use LaravelCommon\ViewModels\AbstractViewModel;

class PatientViewModel extends AbstractViewModel
{
    /**
     * @var bool $autoAddResource;
     */
    protected $isAutoAddResource = true;

    /**
     * @var Patient
     */
    protected $model;

    /**
     * @inheritdoc
     */
    public function link(): string
    {
        return '/patient/' .  $this->model->getId();
    }

    /**
     * @inheritdoc
     */
    public function addResource()
    {
        $village = $this->model->getVillage();
        if($village) {
            $this->embedResource('village', new VillageViewModel($village));
        }
    }

    /**
     * @inheritdoc
     */
    public function toArray()
    {
        return [
            'record_medic' => $this->model->getRecordMedic(),
            'name' => $this->model->getName(),
            'address' => $this->model->getAddress(),
            'phone' => $this->model->getPhone(),
            'rt' => $this->model->getRt(),
            'rw' => $this->model->getRw(),
            'date_of_birth' => $this->model->getDateOfBirth(),
            'gender' => $this->model->getGender(),
        ];
    }
}
