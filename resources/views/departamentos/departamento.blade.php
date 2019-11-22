@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Departamentos</h2>
    <p>ID: {{$departamento->id}}</p>
    <p>Nombre: {{$departamento->nombre}}</p>

@endsection