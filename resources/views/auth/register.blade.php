

@extends('Client.layout.main_template')

@section('sectionMain')

{{-- @dump($errors->all()) --}}

<div class="container d-flex align-items-center vh-100">

    <form class="text-start w-100" action="{{ route('register.handle') }}" method="POST">

         @csrf
        <h2 class="fw-bold d-block text-center">CREAR UNA CUENTA</h2>
        <div class="mb-3 text-start p-2">
            <label class="form-label" style="color: #8F8E8E;">NOMBRE</label>
            <input type="text" name="name" class="form-control @error('name') border-danger @enderror" placeholder="Ingrese su nombre">
            @error('name') @include('fragments.errorsv')@enderror
        </div>

        <div class="mb-3 text-start p-2">
            <label class="form-label" style="color: #8F8E8E;">CORREO ELECTRÓNICO</label>
            <input type="email" name="email" class="form-control @error('email') border-danger @enderror" placeholder="Ingrese su correo Electrónico">
            @error('email') @include('fragments.errorsv')@enderror
        </div>

        <div class="mb-3 text-start p-2">
            <label class="form-label" style="color: #8F8E8E;">CONTRASEÑA</label>
            <input type="password" name="password" class="form-control @error('password') border-danger @enderror" placeholder="Ingrese su contraseña">
            @error('password') @include('fragments.errorsv')@enderror
        </div>

        <div class="mb-3 text-start p-2">
            <label class="form-label" style="color: #8F8E8E;">CONFIRMAR CONTRASEÑA</label>
            <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') border-danger @enderror" placeholder="Confirme su contraseña">
            @error('password_confirmation') @include('fragments.errorsv')@enderror
        </div>

        <div class="mb-3 text-start p-2">
            <label class="form-label" style="color: #8F8E8E;">TELEFONO</label>
            <input type="text" name="phone" class="form-control @error('phone') border-danger @enderror" placeholder="Ingrese su telefono">
            @error('phone') @include('fragments.errorsv')@enderror
        </div>
        <button type="submit" class="btn btn-dark d-block mx-auto" style="width: 45%;">REGISTRARSE</button>

    </form>
</div>

@endsection




