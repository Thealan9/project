@extends('Admin.layout.main_template')

@section('sectionMain')

<div class="container ">
    <div class="d-flex justify-content-between align-items-center mb-3 ">
        <h2>Clientes</h2>
    </div>
    <!-- Encabezados -->
    <div class="row fw-bold text-uppercase border-bottom pb-2 ">
        <div class="col-2">Nombre</div>
        <div class="col-2">Correo Electrónico</div>
        <div class="col-2">Contraseña</div>
        <div class="col-2">Teléfono</div>
        <div class="col-2 text-center">Acciones</div>
    </div>
    @foreach ($users as $u)
    <div class="row bg-light p-2 mb-2 rounded">
        <div class="col-2">{{ $u->name }}</div>
        <div class="col-2">{{ $u->email }} </div>
        <div class="col-2" style="overflow: hidden; text-overflow: ellipsis;" >{{ $u->password }} </div>
        <div class="col-2">{{ $u->phone }} </div>
        <div class="col-2 text-center">
            <a class="btn btn-warning btn-sm" type="button" href="{{route ('clientes.edit', $u)}}">
                <i class="fa-solid fa-pen"></i>
            </a>
            <a class="btn btn-danger btn-sm" type="button" href="{{ route ('clientes.delete', $u)}}">
                <i class="fa-solid fa-trash-can"></i>
            </a>
        </div>
    </div>
    @endforeach

</div>
@endsection