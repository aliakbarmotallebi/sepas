<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Dashboard\DashboardController;
use App\Models\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends DashboardController
{
    protected $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->repository->all();

        return view(
            'dashboard.users.index',
            compact('users')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = resolve($this->repository->model())->getRoles();

        return view(
            'dashboard.users.create',
            compact('roles')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6',
            'role'     => 'required',
        ]);

        //$input = $request->except(['email', 'mobile']);

        $user = resolve($this->repository->model());

        $inputs = $request->except([
            '_token',
            'password_confirmation'
        ]);

        $user = $this->repository->forceFill(array_merge(
            $inputs,
            $user->username($request->get('username'))
        ));

        $user->role = $request->get('role');
        $user->save();

        //alert

        return redirect()->route('dashboard.users.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view(
            'dashboard.users.edit',
            compact('user')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'username' => 'required',
            'role'     => 'required',
        ]);

        $inputs = $request->except(['_token', '_method']);

        $user->forceFill(array_merge(
            $inputs,
            $user->username($request->get('username'))
        ))->save();

        //alert

        return redirect()->route('dashboard.users.index');
    }
}
