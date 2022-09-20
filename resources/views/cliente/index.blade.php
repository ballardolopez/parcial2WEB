@extends('tema.app')

@section('title', 'Lista de clientes')

@section('contenido')
    <h3>
        Lista de Clientes
    </h3>

    <div class="col-sm-10">
        <form action="{{ route('cliente.index') }}" method="GET">
            <div class="form-row">
                <div class="col-sm-4 my-1">
                     <input type="text" class="form-control" name="texto" value="">
                </div>
                <div class="col-sm-4 my-11">
                    <input type="submit" class="btn btn-primary" value="Buscar">

                </div>
            </div>
        </form>

    </div>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>
                    Primer Nombre
                </th>
                <th>
                    Segundo Nombre
                </th>
                <th>
                    Primer Apellido
                </th>
                <th>
                    Segundo Apellido
                </th>
                <th>
                    Direccion
                </th>
                <th>
                    Telefono
                </th>
            </tr>

        </thead>

        <tbody>
            @foreach ($cliente as $cliente)
                <tr>
                    <td>
                        {{ $cliente->Primer_nombre }}
                    </td>
                    <td>
                        {{ $cliente->Segundo_nombre }}
                    </td>
                    <td>
                        {{ $cliente->Primer_apellido }}
                    </td>
                    <td>
                        {{ $cliente->Segundo_apellido }}
                    </td>
                    <td>
                        {{ $cliente->Direccion }}
                    </td>
                    <td>
                        {{ $cliente->Telefono }}
                    </td>
                </tr>
            @endforeach
        </tbody>



    </table>

@endsection
