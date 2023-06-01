<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use LaravelCommon\App\Queries\UserQuery;

class VillageController extends Controller
{
    
     /**
     * Display village list page
     */
    public function index(): Response
    {   
        return Inertia::render('Village/VillageList');
    }


     /**
     * Display village list page
     */
    public function add(): Response
    {   
        return Inertia::render('Village/VillageAdd');
    }
}