<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Queries\VillageQuery;
use App\ViewModels\VillageViewModel;
use Illuminate\Http\Request;
use LaravelCommon\App\Consts\ResponseConst;
use LaravelCommon\Responses\PagedJsonResponse;
use LaravelCommon\Responses\ResourceCreatedResponse;
use LaravelCommon\Utilities\Database\ModelUnit;

class VillageController extends Controller
{
    /**
     *
     * @var VillageQuery
     */
    protected VillageQuery $villageQuery;
    /**
     *
     * @var ModelUnit
     */
    protected ModelUnit $modelUnit;

    /**
     * Undocumented function
     *
     * @param VillageQuery $villageQuery
     * @param ModelUnit $modelUnit
     */
    public function __construct(
        VillageQuery $villageQuery,
        ModelUnit $modelUnit
    )
    {
        $this->villageQuery = $villageQuery;
        $this->modelUnit = $modelUnit;
    } 

     /**
     * Display village list page
     */
    public function getAll(Request $request): PagedJsonResponse
    {   
        return new PagedJsonResponse('OK', ResponseConst::OK, $this->villageQuery, $request);
    }

    /**
     * Display village list page
     */
    public function store(Request $request): ResourceCreatedResponse
    {   
        $resource = $request->getResource();
        $this->modelUnit->persist($resource);
        $this->modelUnit->flush();

        return new ResourceCreatedResponse('OK', ResponseConst::OK, new VillageViewModel($resource));
    }


}