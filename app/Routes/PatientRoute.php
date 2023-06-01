<?php

namespace App\Routes;

use App\Http\Controllers\PatientController;
use LaravelCommon\App\Routes\CommonRoute;
use Illuminate\Support\Facades\Route;

class PatientRoute extends CommonRoute
{
 /**
     * register warehouse route
     *
     * @return void
     */
    public static function register()
    {
        Route::get('/patients', [PatientController::class, 'index'])->middleware(['auth', 'verified']);
        Route::get('/patient/add', [PatientController::class, 'add'])->middleware(['auth', 'verified']);
    }
}