<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use LaravelCommon\App\Consts\ResponseConst;
use LaravelCommon\App\Queries\UserQuery;
use LaravelCommon\Responses\PagedJsonResponse;
use LaravelCommon\ViewModels\PaggedCollection;

class UserController extends Controller
{
    /**
     *
     * @var UserQuery
     */
    protected UserQuery $userQuery;

    /**
     * Undocumented function
     *
     * @param UserQuery $userQuery
     */
    public function __construct(
        UserQuery $userQuery
    )
    {
        $this->userQuery = $userQuery;
    } 
     /**
     * Display user list page
     */
    public function getAll(Request $request): PagedJsonResponse
    {   
        return new PagedJsonResponse('OK', ResponseConst::OK, $this->userQuery, $request);
    }
}