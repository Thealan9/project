@extends('Admin.layout.main_template')

@section('sectionMain')
<h1 class=" ps-5 ">  Bienvenido  {{ auth()->user()->name }}</h1>

<div class="d-flex flex-grow-1 align-items-center justify-content-center">
            <div class="row g-3 w-75">
                <div class="col-6">
                    <a href="{{ route('suppliers.index') }}" class="btn btn-secondary d-flex align-items-center justify-content-center gap-2 w-100 py-3 rounded-pill"
                    style="background-color: #D0C8C1;">
                        <i class="fas fa-truck"></i> PROVEEDORES
                    </a>
                </div>
                <div class="col-6">
                    <a href="#" class="btn btn-secondary d-flex align-items-center justify-content-center gap-2 w-100 py-3 rounded-pill"
                    style="background-color: #D0C8C1;">
                        <i class="fas fa-users"></i> CLIENTES
                    </a>
                </div>
                <div class="col-6">
                    <a href="{{ route('servicios.index') }}" class="btn btn-secondary d-flex align-items-center justify-content-center gap-2 w-100 py-3 rounded-pill"
                    style="background-color: #D0C8C1;">
                        <i class="fas fa-tools"></i> REPARACIONES
                    </a>
                </div>
                <div class="col-6">
                    <a href="{{ route('inventario.index') }}" class="btn btn-secondary d-flex align-items-center justify-content-center gap-2 w-100 py-3 rounded-pill"
                    style="background-color: #D0C8C1;">
                        <i class="fas fa-clipboard-check"></i> INVENTARIO
                    </a>
                </div>
            </div>
        </div>


@endsection




