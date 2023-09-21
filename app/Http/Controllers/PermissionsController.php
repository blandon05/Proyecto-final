<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermissionRequest;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    public function index(){

        $permission = Permission::all();
        
        return inertia('Permission/Index', [
            'Permission' => $permission
        ]);
    }


    //Con esta funcion se carga la vista para crear los servicios 
    
    public function create()
    {
        return inertia('Permission/Create');
    }


    //funcion que guarda la informacion de los servicios y el en la lines 35 redirige a otra vista 
    public function store(PermissionRequest $request)
    {
        $permissions = Permission::create($request->all());
        return redirect()->route('Permissions.index', $permissions);
    }

    public function show(Permission $Permission){
        return inertia('Permission/Edit', [
            'permission' => $Permission,
        ]);
    }


    public function edit(Permission $Permission){
        return inertia('Permission/Edit', [
            'permission' => $Permission,
        ]);
    }

    public function update(PermissionRequest $request, Permission $Permission)
    {
        $Permission->update($request->validated());
        return redirect()->route('Permissions.index', $Permission);
    }

    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect()->route('Permissions.index');
    }
   
}
