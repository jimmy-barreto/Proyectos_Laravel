@extends('layouts.layouts')

@section('titulo','Actualizar proyecto')
 
@section('contenido')

<h1 class="text-center">Editar Proyecto</h1>
<br><br>

@if($errors->any())
	<div class="alert alert-danger">
	<div class="header"> <strong>Ups.</strong> Algo anda mal...</div>
	<ul>
		@foreach ($errors->all() as $error)
			<li>{{$error}}</li>
		@endforeach
	</ul>
	</div>
	
@endif

<form action="{{route('proyecto.update', $proyecto->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-row">
            <div class="form-group col-md-6">
            <label>Nombre del proyecto:</label>
            <input type="text" class="form-control" name="nombre" value="{{$proyecto->nombre}}">
            </div>
        </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Duracion del proyecto en meses:</label>
        <input type="number" class="form-control" name="duracion" value="{{$proyecto->duracion}}">
        </div>
        </div>
    <div class="form-row">
        <button type="submit" class="btn btn-primary">Modificar proyecto</button>
    </div>
    </form>

@endsection