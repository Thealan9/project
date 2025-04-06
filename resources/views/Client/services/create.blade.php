
@extends('Client.layout.main_template')

@section('sectionMain')

{{-- @dump($errors->all()) --}}
<div class="container">
    <div class="row ">
        <div class="col-md-6 p-4">
            <h2 class="fw-bold text-center">Reparaciones</h2><br><br>
            <p class="fs-5 text-justify">Si tuviste algún problema con alguno de nuestros productos, llena el siguiente formulario explicando lo más claro y concreto posible tu problema; nosotros le daremos solución cuánto antes.</p>
        </div>
        <div class="col-md-6">
            <div class="form-container">
                <form action="{{ route('services.store') }} " method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: #8F8E8E;">Nombre del Producto</label>
                        <input type="text" class="form-control @error('device') border-danger @enderror" name='device'  placeholder="Coloque el nombre del producto" >
                        @error('device') @include('fragments.errorsv')@enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: #8F8E8E;">Descripción del Problema</label>
                        <textarea class="form-control @error('details') border-danger @enderror" rows="4" name="details" placeholder="Describa el problema" ></textarea>
                        @error('details') @include('fragments.errorsv')@enderror
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Tipo de servicio</label>
                        <select class="form-select @error('t_service') border-danger @enderror" aria-label="Default select example" name="t_service" >

                        <option> Selecciona . . </option>
                        @foreach ($list_service as $ts)
                            <option value="{{ $ts }}">{{ $ts }}</option>
                        @endforeach
                        </select>
                        @error('t_service') @include('fragments.errorsv')@enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: #8F8E8E;">Modelo</label>
                        <input type="text" class="form-control @error('model') border-danger @enderror" name='model'  placeholder="Modelo del producto" >
                        @error('model') @include('fragments.errorsv')@enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: #8F8E8E;">Fotografía</label>
                        <div class="d-flex align-items-center">
                            <img id="preview" src="https://via.placeholder.com/80" class="me-2" alt="Imagen de referencia" style="width: 100px; height: 100px; object-fit: cover;">
                            <input class="form-control  @error('image') border-danger @enderror" type="file" name="image" id="image" onchange="previewImage(event)">
                            @error('image') @include('fragments.errorsv')@enderror
                        </div>


                    </div>

                    <div class="mb-3 d-flex justify-content-end">
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>

                    <input type="hidden" value="{{ auth()->user()->name }}" name="name_client">
                    <input type="hidden" value="En espera" name="progress">

                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('preview');
            output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>

@endsection




