@extends('tema.app')

@section('title', 'Inicio')

@section('contenido')
    <h3>
        Crear Cliente
    </h3>
    <form action="{{ route('cliente.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-10">
                <label for="ImputNombre" class="form-label">Primer Nombre</label>
                <input type="text" name="Primer_nombre" id="ImputNombre" class="form-control" placeholder="..."value="{{ old('Primer_nombre') }}">

            </div>

            <div class="col-sm-10">
                <label for="ImputNombre" class="form-label">Segundo Nombre</label>
                <input type="text" name="Segundo_nombre" id="ImputNombre" class="form-control" placeholder="..."value="{{ old('Segundo_nombre') }}">
            </div>

            <div class="col-sm-10">
                <label for="ImputNombre" class="form-label">Primer Nombre</label>
                <input type="text" name="Primer_apellido" id="ImputNombre" class="form-control" placeholder="..."value="{{ old('Primer_apellido') }}">
            </div>

            <div class="col-sm-10">
                <label for="ImputNombre" class="form-label">Segundo Apellido</label>
                <input type="text" name="Segundo_apellido" id="ImputNombre" class="form-control" placeholder="..."value="{{ old('Segundo_apellido') }}">
            </div>

            <div class="col-sm-10">
                <label for="ImputNombre" class="form-label">Direccion</label>
                <input type="text" name="Direccion" id="ImputNombre" class="form-control" placeholder="..."value="{{ old('Direccion') }}">
            </div>

            <div class="col-sm-10">
                <label for="ImputNombre" class="form-label">Telefono</label>
                <input type="text" name="Telefono" id="ImputNombre" class="form-control" placeholder="..."value="{{ old('Telefono') }}">
            </div>

            <div class="col-sm-12 text-end" my-2>
                <button type="submit" class="btn btn-primary">
                    GUARDAR
                </button>
            </div>
        </div>
    </form>

@endsection
