@extends('Client.layout.main_template')

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

    <div class="container">
        <div class="row justify-content-center">
            @foreach ($products as $p)
                <div class="col-12 col-sm-6 col-md-3 mb-4">
                    <div class="card text-center">
                        <img src="/images/products/{{ $p->image }}" class="card-img-top p-2" alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $p->name_product }}</h5>
                            <p class="card-text">$ {{ $p->unit_price }}</p>

                            @if (auth()->user() != null)
                            <a href="#" class="btn btn-secondary" style="background-color: #D0C8C1; color: black; border-radius: 0;">COMPRAR</a>
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


