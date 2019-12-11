@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamentos</h2>
    <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Jefe departamento</th>
      <th>Empleados</th>
    </tr>
    <tr>
      <td>{{$departamento->id}}</td>
      <td>{{$departamento->nombre}}</td>
      @if(!is_null($departamento->empleado))
        <td><a href="{{route('empleado', $departamento->empleado->id)}}">{{$departamento->empleado->nombre}}</a></td>
      @else
        <td></td>
      @endif
    	@if($departamento->empleados)
    		@foreach($departamento->empleados as $empleado)
        		<td><a href="{{route('empleado', $empleado->id)}}">{{$empleado->nombre}}</a></td>
        	@endforeach
        @endif
    </tr>
  </table>

@endsection