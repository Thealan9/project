@extends('Admin.layout.main_template')

@section('sectionMain')
    <table class="table">
        <thead>
            <th>¿Estas seguro que quieres eliminar el producto {{ $product->name_product }}?</th>


        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="d-flex gap-2">
                        <a class="btn btn-danger" href="{{ route('inventario.index') }}"><i
                                class="fa-solid fa-trash"></i>Cancelar</a>



                        <form action="{{ route('inventario.destroy', $product->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-trash"></i>Confirmar</button>
                        </form>
                    </div>
                </td>

            </tr>



        </tbody>
    </table>
@endsection
