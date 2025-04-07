<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Proveedor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            margin-top: 50px;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-control {
            border-radius: 10px;
        }
        .btn-custom-green {
            background-color: #00c853;
            color: white;
            border-radius: 10px;
        }
        .btn-custom-red {
            background-color: #d50000;
            color: white;
            border-radius: 10px;
        }
    </style>
</head>
<body>

    <div class="container text-center">
        <h2 class="fw-bold">EDITAR PROVEEDOR {{ $supplier->name_supplier }}</h2>
        <form action="{{ route('suppliers.update', $supplier) }}" method="POST">
            @csrf
            @method('patch')
            <div class="mb-3 text-start">
                <label for="nombre" class="form-label fw-bold">NOMBRE</label>
                <input type="text" class="form-control @error('name_supplier') border-danger @enderror"
                name="name_supplier" value="{{$supplier->name_supplier}}" required>
                @error('name_supplier') @include('fragments.errorsv')@enderror
            </div>
            <div class="mb-3 text-start">
                <label for="correo" class="form-label fw-bold">CORREO ELECTRÓNICO</label>
                <input type="email" class="form-control @error('email') border-danger @enderror"
                name="email" value="{{$supplier->email}}"required>
                @error('email') @include('fragments.errorsv')@enderror
            </div>
            <div class="mb-3 text-start">
                <label for="telefono" class="form-label fw-bold">TELÉFONO</label>
                <input type="text" class="form-control @error('phone_supplier') border-danger @enderror"
                name="phone_supplier" value="{{$supplier->phone_supplier}}" required>
                @error('phone_supplier') @include('fragments.errorsv')@enderror
            </div>
            <div class="d-flex justify-content-center gap-3">
                <button type="submit" class="btn btn-custom-green fw-bold">EDITAR</button>
                <a href="{{ route('suppliers.index') }}" class="btn btn-custom-red fw-bold">CANCELAR</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
