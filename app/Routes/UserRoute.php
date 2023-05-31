<?php

namespace App\Routes;

use App\Http\Controllers\UserController;
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
        Route::get('/users', [UserController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
    }
}