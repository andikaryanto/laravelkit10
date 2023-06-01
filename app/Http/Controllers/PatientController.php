<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class PatientController extends Controller
{
    
     /**
     * Display village list page
     */
    public function index(): Response
    {   
        return Inertia::render('Patient/PatientList');
    }


     /**
     * Display village list page
     */
    public function add(): Response
    {   
        return Inertia::render('Patient/PatientAdd');
    }
}