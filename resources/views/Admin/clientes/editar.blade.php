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
        <h2 class="fw-bold">EDITAR CLIENTE</h2>
        <form action="{{ route('proveedores.store') }}" method="POST">
            @csrf
            <div class="mb-3 text-start">
                <label for="nombre" class="form-label fw-bold">NOMBRE</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3 text-start">
                <label for="correo" class="form-label fw-bold">CORREO ELECTRÓNICO</label>
                <input type="email" class="form-control" id="correo" name="correo" required>
            </div>
            <div class="mb-3 text-start">
                <label for="contraseña" class="form-label fw-bold">CONTRASEÑA</label>
                <input type="password" class="form-control" id="contraseña" name="contraseña" required>
            </div>
            <div class="mb-3 text-start">
                <label for="telefono" class="form-label fw-bold">TELÉFONO</label>
                <input type="text" class="form-control" id="telefono" name="telefono" required>
            </div>
            <div class="d-flex justify-content-center gap-3">
                <button type="submit" class="btn btn-custom-green fw-bold">EDITAR</button>
                <a href="{{ route('proveedores.index') }}" class="btn btn-custom-red fw-bold">CANCELAR</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
