<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminServicos\UpdateRequest;
use App\Models\Service;
use Illuminate\Http\Request;
//use App\Http\Requests\Inventario\UpdateRequest;

class AdminReparacionesController extends Controller
{
    public function index()
    {
        $service= Service::all();
        return view('Admin.servicios.index',compact('service'));
    }



    public function edit(Service $servicio)
    {
        $list_service = [
            "Limpieza y mantenimiento",
            "Reparación",
            "Diagnóstico",
        ];

        $list_progress = [
            "En espera",
            "Producto aceptado",
            "Reparando",
            "Finalizado",
            "Producto en camino",
        ];

        return view ('Admin.servicios.editar', compact('servicio','list_service','list_progress'));
    }

    public function update(UpdateRequest $request, Service $servicio)
    {
        $data= $request->all();

        $servicio->update($data);
        return to_route('servicios.index')->with('status','Servicio Actualizado');

    }

    public function delete(Service $servicio)
    {

        return view ('Admin.servicios.eliminar', compact('servicio'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $servicio)
    {
        $servicio->delete();
        return to_route('servicios.index')-> with('nosuccess','Servicio Eliminado');
    }




}
