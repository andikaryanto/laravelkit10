<?php

namespace App\ViewModels;

use Illuminate\Database\Eloquent\Model;
use LaravelCommon\ViewModels\PaggedCollection;
use LaravelOrm\Interfaces\IEntity;

class VillageCollection extends PaggedCollection
{
    /**
     * @inheritdoc
     */
    public function shape(Model $model)
    {
        $this->addItem(new VillageViewModel($model, $this->request));
    }
}
