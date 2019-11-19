@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleados</h2>

    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Telefono</th>
        <th>Proyecto responsable</th>
      </tr>
      <tr>
        <td>{{$empleado->id}}</td>
        <td>{{$empleado->nombre}}</td>
        <td>{{$empleado->apellido}}</td>
        <td>{{$empleado->telefono}}</td>
        @if(!is_null($empleado->proyecto))
        <td><a href="{{route('proyecto', $empleado->proyecto->id)}}">{{$empleado->proyecto->nombre}}</a></td>
        @endif
      </tr>
    </table>

@endsection