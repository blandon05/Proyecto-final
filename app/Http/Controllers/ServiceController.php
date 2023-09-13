<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{ 
    //Funcion que carga la vista principal de servicios
    //Con la variable $servicios se envian todos los servicios registrados en la base de datos
    public function index(){

        $services = Service::all();
        
        return inertia('Services/Index', [
            'services' => $services
        ]);
    }


    //Con esta funcion se carga la vista para crear los servicios 
    
    public function create()
    {
        return inertia('Services/create');
    }


    //funcion que guarda la informacion de los servicios y el en la lines 35 redirige a otra vista 
    public function store(ServiceRequest $request)
    {
        $services = Service::create($request->all());
        return redirect()->route('services.show', $services);
    }

    public function show(Service $service)
    {
        return inertia('Services/detail', [
            'service' => $service
        ]);
    }

    public function edit(Service $service){
        return inertia('Services/edit', [
            'service' => $service,
        ]);
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->route('services.index');
    }
   


}
