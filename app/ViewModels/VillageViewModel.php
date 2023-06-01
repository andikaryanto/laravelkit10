<?php

namespace App\ViewModels;

use App\Models\Village;
use LaravelCommon\ViewModels\AbstractViewModel;

class VillageViewModel extends AbstractViewModel
{
    /**
     * @var bool $autoAddResource;
     */
    protected $isAutoAddResource = true;

    /**
     * @var Village
     */
    protected $model;

    /**
     * @inheritdoc
     */
    public function link(): string
    {
        return '/village/' .  $this->model->getId();
    }

    /**
     * @inheritdoc
     */
    public function addResource()
    {

    }

    /**
     * @inheritdoc
     */
    public function toArray()
    {
        return [
            'name' => $this->model->getName(),
            'district_name' => $this->model->getDistrictName(),
            'city_name' => $this->model->getCityName(),
        ];
    }
}
