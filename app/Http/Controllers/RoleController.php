<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleRequest;
use App\Models\Role;
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
        return redirect()->route('Roles.show',  $role);
    }

    public function show(Role  $role)
    {
        return inertia('Role/Detail', [
            'role' =>  $role
        ]);
    }


    public function edit(Role $role)
    {
        return inertia('Role/Edit', [
            'role' =>  $role,
        ]);
    }

    public function update(RoleRequest $request, Role  $role)
    {
         $role->update($request->validated());
        return redirect()->route('Roles.show',  $role);
    }

    public function destroy(Role  $role)
    {
         $role->delete();
        return redirect()->route('Roles.index');
    }


}
