@extends('Admin.layout.main_template')

@section('sectionMain')

<div class="container ">
    <div class="d-flex justify-content-between align-items-center mb-3 ">
        <h2>HISTORIAL DE REPARACIONES</h2>
    </div>

    <!-- Encabezados -->
    <div class="row fw-bold text-uppercase border-bottom pb-2 ">
        <div class="col-2 text-center">A NOMBRE DE</div>
        <div class="col-2 text-center">DISPÓSITIVO</div>
        <div class="col-2 text-center">MODELO</div>
        <div class="col-2 text-center">SERVICIO</div>
        <div class="col-2 text-center">PROCESO DEL SERVICIO</div>
        <div class="col-2 text-center">ACCIONES</div>
    </div>

    @foreach ($service as $s)
    <div class="row bg-light p-2 mb-2 rounded">
        <div class="col-2 text-center">{{ $s->name_client }}</div>
        <div class="col-2 text-center">{{ $s->device }}</div>
        <div class="col-2 text-center">{{ $s->model }}</div>
        <div class="col-2 text-center">{{ $s->t_service }}</div>
        <div class="col-2 text-center">{{ $s->progress }}</div>

        <div class="col-2 text-center">
            <a class="btn btn-warning btn-sm" type="button" href="{{route ('servicios.edit', $s)}}">
                <i class="fa-solid fa-pen"></i>
            </a>
            <a class="btn btn-danger btn-sm" type="button" href="{{ route ('servicios.delete', $s)}}">
                <i class="fa-solid fa-trash-can"></i>
            </a>
        </div>
    </div>
    @endforeach

</div>
@endsection



