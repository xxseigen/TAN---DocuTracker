<?php

namespace App\Http\Controllers;

use App\DataTables\UserDataTable;
use Illuminate\Http\Request;
use App\Document;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\PermissionRepository;
use App\Repositories\UserRepository;
use App\Tag;
use App\User;
use Flash;
use Response;

use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /** @var  UserRepository */
    private $userRepository;

    /** @var PermissionRepository */
    private $permissionRepository;

    public function __construct(UserRepository $userRepo,
                                PermissionRepository $permissionRepository)
    {
        $this->userRepository = $userRepo;
        $this->permissionRepository = $permissionRepository;
    }

    /**
     * Display a listing of the User.
     *
     * @param UserDataTable $userDataTable
     * @return Response
     */


    public function index(UserDataTable $userDataTable)
    {
        $this->authorize('viewAny', User::class);
        return $userDataTable->render('roles.index');
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
