<?php

namespace App\Routes\Api;

use App\Http\Controllers\Api\VillageController;
use App\Http\Middleware\Hydrators\VillageHydrator;
use LaravelCommon\App\Routes\CommonRoute;
use Illuminate\Support\Facades\Route;
use LaravelCommon\App\Http\Middleware\ControllerAfter;

class VillageRoute extends CommonRoute
{
 /**
     * register warehouse route
     *
     * @return void
     */
    public static function register()
    {
        Route::get('/villages', [VillageController::class, 'getAll'])
            ->middleware(ControllerAfter::class);

        Route::post('/village', [VillageController::class, 'store'])
            ->middleware(
                [
                    ControllerAfter::class,
                    VillageHydrator::class . ':post'
                ]);
    }
}