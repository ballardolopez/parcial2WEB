@extends('tema.app')

@section('title', 'Lista de clientes')

@section('contenido')
    <h3>
        Lista de Clientes
    </h3>

    <table>
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
