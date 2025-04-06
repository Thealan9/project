@extends('Admin.layout.main_template')

@section('sectionMain')


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="d-flex flex-row-reverse">
        <a class="btn btn-success" type="button" href="{{ route('inventario.create') }}">AGREGAR PRODUCTO</a>
      </div>


    <div class="container">
        <div class="row justify-content-center">
            @foreach ($products as $p)
                <div class="col-12 col-sm-6 col-md-3 mb-4">
                    <div class="card text-center">
                        <img src="/images/products/{{ $p->image }}" class="card-img-top p-2" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $p->name_product }}</h5>


                            <div class="d-flex justify-content-around">
                                <p class="card-text">$ {{ $p->unit_price }}</p>
                                <p class="card-text">{{ $p->stock }} en stock</p>
                            </div>


                            @if (auth()->user() != null)
                            <div class="d-flex justify-content-around">
                            <a href="{{ route ('inventario.edit', $p)}}" class="btn btn-sm btn-warning" >EDITAR</a>
                            <a href="{{ route ('inventario.delete', $p)}}" class="btn btn-sm btn-danger" >ELIMINAR</a>
                        </div>
                        @endif

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

@endsection


