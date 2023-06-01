<?php

namespace App\Http\Controllers;


use App\Repositories\VillageRepository;
use Inertia\Inertia;
use Inertia\Response;

class PatientController extends Controller
{

    protected VillageRepository $villageRepository;

    /**
     * Undocumented function
     *
     * @param VillageRepository $patientRepository
     */
    public function __construct(
        VillageRepository $villageRepository
    )
    {
        $this->villageRepository = $villageRepository;
    }
    
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

        $villages = $this->villageRepository->all();
        return Inertia::render('Patient/PatientAdd', ['villages' => $villages]);
    }
}