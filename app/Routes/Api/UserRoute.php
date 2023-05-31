<?php

namespace App\Routes\Api;

use App\Http\Controllers\Api\UserController as ApiUserController;
use LaravelCommon\App\Routes\CommonRoute;
use Illuminate\Support\Facades\Route;

class UserRoute extends CommonRoute
{
 /**
     * register warehouse route
     *
     * @return void
     */
    public static function register()
    {
        Route::get('/users', [ApiUserController::class, 'getAll']);
    }
}