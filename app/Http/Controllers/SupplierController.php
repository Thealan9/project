<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use App\Http\Controllers\Controller;
use App\Http\Requests\Supplier\StoreRequest;
use App\Http\Requests\Supplier\UpdateRequest;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $supplier=Supplier::all();
        return view('Admin.suppliers.index',compact('supplier'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.suppliers.crear');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        

      $data= $request->all(); // guardamos todos los datos en una variable para manipularlos

        Supplier::create($data); // agregar los datos modificados
        return to_route('suppliers.index')->with('status','Proveedor Registrado');
    }


    /**
     * Display the specified resource.
     */
    public function show(Supplier $supplier)
    {
        return view ('Admin/suppliers/mostrar');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Supplier $supplier)
    {

        return view ('Admin/suppliers/editar', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, Supplier $supplier)
    {
        $request->validate([ // Validación directa (lento)
            'name_supplier' => 'required|min:5|max:50',
            'email' => 'required|string',
            'phone_supplier' => 'required|integer'
        ]);

        $data= $request->all(); // guardamos todos los datos en una variable para manipularlos
  
        $supplier->update($data); //Actualizar en la base de datos a través del modelo.
        return to_route('suppliers.index')->with('status','Proveedor Actualizado');
    }

    public function delete(Supplier $supplier)
    {
        echo view ('Admin/suppliers/eliminar', compact('supplier'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Supplier $supplier)
    {
        $supplier->delete();
        return to_route('suppliers.index')->with('status','Proveedor Eliminado');
    }
}
