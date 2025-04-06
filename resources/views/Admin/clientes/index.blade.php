@extends('Admin.layout.main_template')

@section('sectionMain')

<div class="container ">
    <div class="d-flex justify-content-between align-items-center mb-3 ">
        <h2>Clientes</h2>
        <a class="btn btn-success" type="button" href="{{route ('suppliers.create')}}">Agregar Cliente</a>
    </div>
    <!-- Encabezados -->
    <div class="row fw-bold text-uppercase border-bottom pb-2 ">
        <div class="col-3">Nombre</div>
        <div class="col-4">Correo Electrónico</div>
        <div class="col-3">Contraseña</div>
        <div class="col-3">Teléfono</div>
        <div class="col-2 text-center">Acciones</div>
    </div>

    @foreach ($usuario as $u)
    <div class="row bg-light p-2 mb-2 rounded">
        <div class="col-3">{{ $s->name_supplier }}</div>
        <div class="col-4">{{ $s->email }} </div>
        <div class="col-3">{{ $s->phone_supplier }} </div>
        <div class="col-2 text-center">
            <a class="btn btn-warning btn-sm" type="button" href="{{route ('suppliers.edit', $s)}}">
                <i class="fa-solid fa-pen"></i>
            </a>
            <a class="btn btn-danger btn-sm" type="button" href="{{ route ('suppliers.delete', $s)}}">
                <i class="fa-solid fa-trash-can"></i>
            </a>
        </div>
    </div>
    @endforeach

</div>
@endsection