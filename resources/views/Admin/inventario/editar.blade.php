
@extends('Admin.layout.main_template')

@section('sectionMain')

{{-- @dump($errors->all()) --}}
@dump($errors->all())
<div class="container">
    <div class="row ">
            <h2 class="fw-bold text-center">Editar PRODUCTO {{$product->name_product}}</h2><br><br>
            <div class="form-container">
                <form action="{{ route('inventario.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: #8F8E8E;">Nombre del Producto</label>
                        <input type="text" class="form-control @error('name_product') border-danger @enderror"
                        name='name_product'  placeholder="Coloque el nombre del producto" value="{{$product->name_product}}">
                        @error('name_product') @include('fragments.errorsv')@enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: #8F8E8E;">Modelo</label>
                        <input type="text" class="form-control @error('model') border-danger @enderror"
                        name='model'  placeholder="Modelo del producto" value="{{$product->model}}" >
                        @error('model') @include('fragments.errorsv')@enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: #8F8E8E;">Precio</label>
                        <input type="text" class="form-control @error('unit_price') border-danger @enderror"
                        name='unit_price'  placeholder="Modelo del producto" value="{{$product->unit_price}}">
                        @error('unit_price') @include('fragments.errorsv')@enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: #8F8E8E;">Stock</label>
                        <input type="text" class="form-control @error('stock') border-danger @enderror"
                        name='stock'  placeholder="Modelo del producto" value="{{$product->stock}}">
                        @error('stock') @include('fragments.errorsv')@enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Proveedor del producto</label>
                        <select class="form-select @error('supplier_id') border-danger @enderror" aria-label="Default select example" name="supplier_id" >

                        <option> Selecciona . . </option>
                        @foreach ($proveedores as $p)
                        <option value="{{ $p->id }}" {{ (old('supplier_id', $product->supplier_id) == $p->id) ? 'selected' : '0' }}>
                            {{ $p->name_supplier }}
                        </option>
                        @endforeach
                        </select>
                        @error('supplier_id') @include('fragments.errorsv')@enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold" style="color: #8F8E8E;">Fotografía</label>
                        <div class="d-flex align-items-center">
                            <img id="preview" src="https://via.placeholder.com/80" class="me-2" alt="Imagen de referencia" style="width: 100px; height: 100px; object-fit: cover;">
                            <input class="form-control  @error('image') border-danger @enderror" type="file"
                            name="image" id="image" onchange="previewImage(event)">
                            @error('image') @include('fragments.errorsv')@enderror
                        </div>


                    </div>

                    <div class="mb-3 d-flex justify-content-end">
                        <button type="submit" class="btn btn-success">Añadir</button>
                        <a href="{{ route('inventario.index') }}" class="btn btn-danger" hre>Cancelar</a>
                    </div>

                </form>
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




