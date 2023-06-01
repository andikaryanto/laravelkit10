<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Queries\PatientQuery;
use App\ViewModels\PatientViewModel;
use Illuminate\Http\Request;
use LaravelCommon\App\Consts\ResponseConst;
use LaravelCommon\Responses\PagedJsonResponse;
use LaravelCommon\Responses\ResourceCreatedResponse;
use LaravelCommon\Utilities\Database\ModelUnit;

class PatientController extends Controller
{
    /**
     *
     * @var PatientQuery
     */
    protected PatientQuery $patientQuery;
    /**
     *
     * @var ModelUnit
     */
    protected ModelUnit $modelUnit;

    /**
     * Undocumented function
     *
     * @param PatientQuery $patientQuery
     * @param ModelUnit $modelUnit
     */
    public function __construct(
        PatientQuery $patientQuery,
        ModelUnit $modelUnit
    )
    {
        $this->patientQuery = $patientQuery;
        $this->modelUnit = $modelUnit;
    } 

     /**
     * Display village list page
     */
    public function getAll(Request $request): PagedJsonResponse
    {   
        return new PagedJsonResponse('OK', ResponseConst::OK, $this->patientQuery, $request);
    }

    /**
     * Display village list page
     */
    public function store(Request $request): ResourceCreatedResponse
    {   
        $resource = $request->getResource();
        $this->modelUnit->persist($resource);
        $this->modelUnit->flush();

        return new ResourceCreatedResponse('OK', ResponseConst::OK, new PatientViewModel($resource));
    }


}