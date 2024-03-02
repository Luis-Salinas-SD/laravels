@extends('layouts.plantilla')

@section('title', 'Curso | '. $curso)

@section('contenido')

<h1>Bienvenido a mostrar curso, tú curso es {{ $curso }}</h1>


@endsection