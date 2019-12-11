@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamentos</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Jefe Departamento</th>
    </tr>
    @foreach($departamentos as $departamento)
    <tr>
      <td><a href="{{route('departamento', $departamento->id)}}">{{$departamento->id}}</a></td>
      <td>{{$departamento->nombre}}</td>
      @if(!is_null($departamento->empleado))
        <td><a href="{{route('empleado', $departamento->empleado->id)}}">{{$departamento->empleado->nombre}}</a></td>
      @else
        <td></td>
      @endif
    </tr>
    @endforeach
    
  </table>

@endsection
