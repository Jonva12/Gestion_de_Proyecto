@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleados</h2>
    <p>Id: {{$empleado->id}}</p>
    <p>Nombre: {{$empleado->nombre}}</p>
    <p>Email: {{$empleado->apellido}}</p>
    <p>Telefono: {{$empleado->telefono}}</p>
    @if(!is_null($empleado->proyecto))
      <p>Proyecto: <a href="{{route('proyecto.show', $empleado->proyecto->id)}}">{{$empleado->proyecto->nombre}}</a></p>
    @endif

@endsection