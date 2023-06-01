<?php

namespace App\Routes;

use App\Http\Controllers\VillageController;
use LaravelCommon\App\Routes\CommonRoute;
use Illuminate\Support\Facades\Route;

class VillageRoute extends CommonRoute
{
 /**
     * register warehouse route
     *
     * @return void
     */
    public static function register()
    {
        Route::get('/villages', [VillageController::class, 'index'])->middleware(['auth', 'verified']);
        Route::get('/village/add', [VillageController::class, 'add'])->middleware(['auth', 'verified']);
    }
}