<?php

namespace App\Routes\Api;

use App\Http\Controllers\Api\PatientController;
use App\Http\Middleware\Hydrators\PatientHydrator;
use App\Http\Middleware\Hydrators\VillageHydrator;
use LaravelCommon\App\Routes\CommonRoute;
use Illuminate\Support\Facades\Route;
use LaravelCommon\App\Http\Middleware\ControllerAfter;

class PatientRoute extends CommonRoute
{
 /**
     * register warehouse route
     *
     * @return void
     */
    public static function register()
    {
        Route::get('/patients', [PatientController::class, 'getAll'])
            ->middleware(ControllerAfter::class);

        Route::post('/patient', [PatientController::class, 'store'])
            ->middleware(
                [
                    ControllerAfter::class,
                    PatientHydrator::class . ':post'
                ]);
    }
}