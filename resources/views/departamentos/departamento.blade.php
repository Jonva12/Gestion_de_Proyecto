@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamentos</h2>
    <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Empleados</th>
    </tr>
    <tr>
      <td>{{$departamento->id}}</td>
      <td>{{$departamento->nombre}}</td>
    	@if($departamento->empleados)
    		@foreach($departamento->empleados as $empleado)
        		<td><a href="{{route('empleado', $empleado->id)}}">{{$empleado->nombre}}</a></td>
        	@endforeach
        @endif
    </tr>
  </table>

@endsection