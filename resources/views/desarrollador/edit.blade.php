@extends('layouts.layouts')

@section('titulo','Actualizar desarrollador')
 
@section('contenido')

<h1 class="text-center">Editar desarrollador</h1>
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

<form action="{{route('desarrollador.update', $desarrollador->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="form-row">
            <div class="form-group col-md-6">
            <label>Nombre del desarrollador:</label>
            <input type="text" class="form-control" name="nombre" value="{{$desarrollador->nombre}}">
            </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Apellido del desarrollador:</label>
        <input type="text" class="form-control" name="apellido" value="{{$desarrollador->apellido}}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Telefono:</label>
        <input type="number" class="form-control" name="telefono" value="{{$desarrollador->telefono}}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>Direccion:</label>
        <input type="text" class="form-control" name="direccion" value="{{$desarrollador->direccion}}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
        <label>ID Proyecto:</label>
        <input type="number" class="form-control" name="idproyecto" value="{{$desarrollador->idproyecto}}">
        </div>
    </div>
    <div class="form-row">
        <button type="submit" class="btn btn-primary">Modificar desarrollador</button>
    </div>
    </form>

@endsection