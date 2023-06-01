<?php

namespace App\ViewModels;

use Illuminate\Database\Eloquent\Model;
use LaravelCommon\ViewModels\PaggedCollection;

class PatientCollection extends PaggedCollection
{
    /**
     * @inheritdoc
     */
    public function shape(Model $model)
    {
        $this->addItem(new PatientViewModel($model, $this->request));
    }
}
