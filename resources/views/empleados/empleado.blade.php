@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Empleados</h2>
    <p>Id: {{$empleado->id}}</p>
    <p>Nombre: {{$empleado->nombre}}</p>
    <p>Apellido: {{$empleado->apellido}}</p>
    <p>Email: {{$empleado->email}}</p>
    <p>Telefono: {{$empleado->telefono}}</p>
    @if(!is_null($empleado->departamento_id))
      <p>Departamento: <a href="{{route('departamento', $empleado->departamento_id)}}">{{$empleado->departamento->nombre}}</a></p>
    @endif
    @if(!is_null($empleado->proyecto))
      <p>Proyecto: <a href="{{route('proyecto.show', $empleado->proyecto->id)}}">{{$empleado->proyecto->nombre}}</a></p>
    @endif
    <h3>Colabora en los siguientes proyectos:</h3>
    <ul>
    @foreach($empleado->proyectos as $ep)
      <li><a href="{{route('proyecto.show', $ep->id)}}">{{$ep->nombre}}</a></li>
    @endforeach
    </ul>
@endsection