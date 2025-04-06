@extends('Admin.layout.main_template')

@section('sectionMain')
<table>
  <thead>
      ¿Estás seguro que quieres eliminar el proveedor {{$supplier->name_supplier}}?
  </thead>
  <tbody>
    <tr>
      <td>
        <form action="{{route('suppliers.index')}}">
        <div class="d-flex justify-content-left gap-1">
          {{-- Redirecciona al index --}}
          <button type="submit" class="btn btn-secondary"> Cancelar </button>
        </div>
        </form>
      </td>
      <td>
        <form action="{{route('suppliers.destroy', $supplier->id)}}" method="POST">
          @csrf
          @method('DELETE')
          <div class="d-flex justify-content-left gap-1">
          {{-- Redirecciona al destroy y elimina --}}
          <button type="submit" class="btn btn-danger"> Confirmar </button>
          </div>
        </form>
      </td>
    </tr>
  </tbody>
</table>

@endsection
