<?php

namespace App\Http\Controllers;

use App\Models\AdminInventario;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;
use App\Http\Requests\Inventario\StoreRequest;
use App\Http\Requests\Inventario\UpdateRequest;

class AdminInventarioController extends Controller
{
    public function index()
    {
        $products= Product::all();
        return view('Admin.inventario.index',compact('products'));
    }


    public function create()
    {
        $proveedores= Supplier::all();
        return view('Admin.inventario.crear',compact('proveedores'));
    }


    public function store(StoreRequest $request)
    {

        $data = $request->all();

        if(isset($data["image"])){
            $data["image"]= $filename = time().".".$data["image"] ->extension();

            $request->image->move(public_path("images/products"),$filename);
        }


        Product::create($data);
        return to_route('inventario.index')-> with('success','Producto agregado');

    }





    public function edit(Product $inventario)
    {
        $product = $inventario;
        $proveedores= Supplier::all();
        return view ('Admin.inventario.editar', compact('product','proveedores'));
    }

    public function update(UpdateRequest $request, Product $inventario)
    {
        $data= $request->all();
        if(isset($data["image"])){
            $data["image"]= $filename = time().".".$data["image"] ->extension();

            $request->image->move(public_path("images/products"),$filename);
        }

        $inventario->update($data);
        return to_route('inventario.index')->with('status','Producto Actualizado');

    }

    public function delete(Product $product)
    {

        return view ('Admin.inventario.eliminar', compact('product'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $inventario)
    {
        $inventario->delete();
        return to_route('inventario.index')-> with('nosuccess','Producto Eliminado');
    }



}
