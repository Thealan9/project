
@extends('Admin.layout.main_template')

@section('sectionMain')

{{-- @dump($errors->all()) --}}
@dump($errors->all())
<div class="container">
    <div class="row ">
            <h2 class="fw-bold text-center">EDICION DEL SERVICIO{{ $servicio->id }} </h2><br><br>
            <div class="form-container">
                <form action="{{ route('servicios.update', $servicio->id) }}" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: #8F8E8E;">A NOMBRE DE</label>
                        <input type="text" class="form-control @error('name_client') border-danger @enderror"
                        name='name_client'  placeholder="Coloque el nombre del producto" value="{{$servicio->name_client}}">
                        @error('name_client') @include('fragments.errorsv')@enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: #8F8E8E;">DISPOSITIVO</label>
                        <input type="text" class="form-control @error('device') border-danger @enderror"
                        name='device'  placeholder="Modelo del producto" value="{{$servicio->device}}" >
                        @error('device') @include('fragments.errorsv')@enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: #8F8E8E;">MODELO</label>
                        <input type="text" class="form-control @error('model') border-danger @enderror"
                        name='model'  placeholder="Modelo del producto" value="{{$servicio->model}}">
                        @error('model') @include('fragments.errorsv')@enderror
                    </div>




                    <div class="d-flex justify-content-around">

                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #8F8E8E;">SERVICIO</label>
                            <select class="form-select @error('t_service') border-danger @enderror" aria-label="Default select example" name="t_service" >

                            <option> Selecciona . . </option>
                            @foreach ($list_service as $p)
                            <option value="{{ $p }}" {{ (old('t_service', $servicio->t_service) == $p) ? 'selected' : '0' }}>
                                {{ $p }}
                            </option>
                            @endforeach
                            </select>
                            @error('t_service') @include('fragments.errorsv')@enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-bold" style="color: #8F8E8E;">PROCESO DEL SERVICIO</label>
                            <select class="form-select @error('progress') border-danger @enderror" aria-label="Default select example" name="progress" >

                            <option> Selecciona . . </option>
                            @foreach ($list_progress as $p)
                            <option value="{{ $p }}" {{ (old('progress', $servicio->progress) == $p) ? 'selected' : '0' }}>
                                {{ $p }}
                            </option>
                            @endforeach
                            </select>
                            @error('progress') @include('fragments.errorsv')@enderror







                        </div>


                    </div>


                    <div class="mb-3 d-flex justify-content-end">
                        <button type="submit" class="btn btn-success">EDITAR</button>
                        <a href="{{ route('servicios.index') }}" class="btn btn-danger" hre>CANCELAR</a>
                    </div>

                </form>
            </div>

    </div>
</div>



@endsection




