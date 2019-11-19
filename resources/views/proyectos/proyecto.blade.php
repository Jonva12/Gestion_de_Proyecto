@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Proyectos</h2>

    <table>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Titulo</th>
        <th>Fecha Inicio</th>
        <th>Fecha fin</th>
        <th>Horas estimadas</th>
        <th>Responsable</th>
      </tr>

      <tr>
        <td>{{$proyecto->id}}</td>
        <td>{{$proyecto->nombre}}</td>
        <td>{{$proyecto->titulo}}</td>
        <td>{{$proyecto->fechainicio}}</td>
        <td>{{$proyecto->fechainfin}}</td>
        <td>{{$proyecto->horasestimadas}}</td>
        @if(!is_null($proyecto->empleado))
          <td><a href="/empleado/{{$proyecto->empleado->id}}">{{$proyecto->empleado->nombre}}</a></td>
        @else
          </tr>
        @endif
      </tr>
    </table>

@endsection
