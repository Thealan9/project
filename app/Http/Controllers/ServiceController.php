<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Controllers\Controller;
use App\Http\Requests\Service\StoreRequest;
use Illuminate\Http\Request;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {

        $list_service = [
            "Limpieza y mantenimiento",
            "Reparación",
            "Diagnóstico",
        ];

        return view('Client.services.create',compact('list_service'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        /*
       $data = $request->validate([
            'name_client' => 'required|string|max:255',
            'device'=> 'required|string|max:255',
            'model'=> 'required|string|max:255',
            't_service'=> 'required|string|max:255',
            'image'=> 'required|string|max:255',
            'details'=> 'required|string|max:255',
            'progress'=> 'required|string|max:255'
        ]);
        if(isset($data["image"])){
            $data["image"]= $filename = time().".".$data["image"] ->extension();

            $request->image->move(public_path("images/products"),$filename);
        }*/

        $data = $request->all();

        if(isset($data["image"])){
            $data["image"]= $filename = time().".".$data["image"] ->extension();

            $request->image->move(public_path("images/services"),$filename);
        }


        Service::create($data);
        return to_route('inicio')-> with('success','Servicio enviado');

    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
    }
}
