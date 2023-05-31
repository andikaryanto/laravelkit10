<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;
use LaravelCommon\App\Queries\UserQuery;

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
    public function index(): Response
    {   
        $users = $this->userQuery->getIterator();
        return Inertia::render('User/UserList', [
            'users' => $users
        ]);
    }
}