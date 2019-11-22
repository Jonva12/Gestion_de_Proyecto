@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>
        <p>Id: {{$proyecto->id}}</p>
        <p>Nombre: {{$proyecto->nombre}}</p>
        <p>Titulo: {{$proyecto->titulo}}</p>
        <p>Fecha Inicio: {{$proyecto->fechainicio}}</p>
        <p>Fecha fin: {{$proyecto->fechainfin}}</p>
        <p>Horas estimadas: {{$proyecto->horasestimadas}}</p>
        @if(!is_null($proyecto->empleado))
          <p>Responsable: <a href="/empleado/{{$proyecto->empleado->id}}">{{$proyecto->empleado->nombre}}</a></p>
        @endif

@endsection
