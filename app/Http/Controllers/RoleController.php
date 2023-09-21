<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index(){ 
        $roles= Role::all();
        return inertia('Role/Index', ['roles'=>$roles]
    );}

    public function create()
    {
        return inertia('Role/Create');
    }

    public function store(RoleRequest $request)
    {
        $role = Role::create($request->all());
        return redirect()->route('Roles.index',  $role);
    }

    public function show(Role  $Role)
    {
        return inertia('Role/Detail', [
            'role' =>  $Role
        ]);
    }


    public function edit(Role $Role)
    {
        return inertia('Role/Edit', [
            'rol' =>  $Role,
        ]);
    }

    public function update(RoleRequest $request, Role  $Role)
    {
         $Role->update($request->validated());
        return redirect()->route('Roles.show',  $Role);
    }

    public function destroy(Role  $role)
    {
         $role->delete();
        return redirect()->route('Roles.index');
    }

    public function user_list(){
        $users= User::all();
        return inertia('Users/Index', ['users'=>$users]
    );}


}
