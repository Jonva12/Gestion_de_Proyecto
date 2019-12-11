@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleados</h2>

    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Proyecto</th>
        <th>Departamento</th>
      </tr>
      @foreach($empleados as $empleado)
      <tr>
        <td><a href="{{route('empleado', $empleado->id)}}"> {{$empleado->id}}</a></td>
        <td>{{$empleado->nombre}}</td>
        <td>{{$empleado->apellido}}</td>
        <td>{{$empleado->email}}</td>
        <td>{{$empleado->telefono}}</td>
        @if(!is_null($empleado->proyecto))
        <td><a href="{{route('proyecto.show', $empleado->proyecto->id)}}">{{$empleado->proyecto->nombre}}</a></td>
        @else
        <td></td>
        @endif
        @if(!is_null($empleado->departamento_id))
        <td><a href="{{route('departamento', $empleado->departamento_id)}}">{{$empleado->departamento->nombre}}</a></td>
        @else
        <td></td>
        @endif
      </tr>
      @endforeach
    </table>

@endsection
