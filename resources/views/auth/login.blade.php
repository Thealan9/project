
@extends('Client.layout.main_template')

@section('sectionMain')

{{-- @dump($errors->all())   --}}
<div class="container d-flex align-items-center vh-100">
    <form class="text-start w-100 " action="{{ route('login.handle') }}" method="POST">
        @csrf
        <h2 class="fw-bold d-block text-center">LOGIN</h2>
        <div class="mb-3 text-start p-2">
            <label class="form-label" style="color: #8F8E8E;">CORREO ELECTRÓNICO</label>
            <input type="email" name="email"  class="form-control @error('email') border-danger @enderror" placeholder="Ingrese su correo Electrónico">
            @error('email') @include('fragments.errorsv')@enderror
        </div>
        <div class="mb-3 text-start p-2">
            <label class="form-label" style="color: #8F8E8E;">CONTRASEÑA</label>
            <input type="password" name="password" class="form-control @error('password') border-danger @enderror" placeholder="Ingrese su contraseña">
            @error('password') @include('fragments.errorsv')@enderror
        </div>
        <button type="submit" class="btn btn-dark d-block mx-auto" style="width: 45%;">INICIAR SESIÓN</button>
        
        {{--<p class="forgot-password mt-3 d-block text-center">¿OLVIDASTE TU CONTRASEÑA?</p>   --}}
    </form>
</div>
@endsection
