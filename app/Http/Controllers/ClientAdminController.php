<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Clien\UpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ClientAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $users = User::all();
        return view('Admin.clientes.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data= $request->all(); // guardamos todos los datos en una variable para manipularlos
        User::create($data); // agregar los datos modificados
        return to_route('clientes.index')->with('status','Usuario Registrado');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $cliente)
    {
        return view ('Admin/clientes/mostrar', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $cliente)
    {
        return view ('Admin/clientes/editar', compact('cliente'));
    }

    public function update(UpdateRequest $request, User $cliente)
    {
        $request->validate([ // Validación directa (lento)
            'name' => 'required|min:5|max:50',
            'email' => 'required|string',
            'password' => 'required|string|min:8',
            'phone' => 'required|numeric'
        ]);

    $data = $request->all();

    Log::info('Datos recibidos para actualizar:', $data);


    // Si la contraseña está presente y no está vacía, encripta la nueva contraseña.
    if (!empty($request->password)) {
        $data['password'] = bcrypt($request->password);
    }


    $cliente->update($data);  // Actualiza el cliente en la base de datos
    return to_route('clientes.index')->with('status','Usuario Actualizado');

    }

    public function delete(User $cliente)
    {
        echo view ('Admin/clientes/eliminar', compact('cliente'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $cliente)
    {
        $cliente->delete();
        return to_route('clientes.index')->with('status','Usuario Eliminado');
    }
}

