@extends('admin.layouts.admin_base')
@section('title')
<title>Administración olimpiadas de Tecnología de la UAIE</title>
@stop
@section('content')

	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif

	<div class="container">
		<h1>Nuevo evento</h1>
		<form action = "{{route('eventos.crear_nuevo')}}" method="post">
			@csrf
			<div class="form-group">
				<label for="nombre_evento">Nombre</label>
				<textarea class="form-control" name = "nombre_evento" id="nombre_evento" rows="1"></textarea>
			</div>
			<div class="form-group">
				<label for="descripcion_evento">Descripción</label>
				<textarea class="form-control" name="descripcion_evento" id="descripcion_evento" rows="1"></textarea>
			</div>
			<div class="form-group">
				<label for="fecha_inicio">Fecha inicio</label>
				<input type="datetime-local" name="fecha_inicio" id = "fecha_inicio">
			</div>
			<div class="form-group">
				<label for="fecha_fin">Fecha fin</label>
				<input type="datetime-local" name="fecha_fin" id = "fecha_fin">
			</div>
			<div class="form-group">
				<label for="nivel_evento">Nivel</label>
				<select class="form-control" name="nivel_evento" id="nivel_evento">
					<option>Primaria</option>
					<option>Secundaria</option>
					<option>Primaria y secundaria</option>
					<option>Media superior</option>
					<option>Superior</option>
					<option>General</option>
				</select>
			</div>
			<div class="form-group">
				<label for="tipo_evento">Tipo</label>
				<select class="form-control" name="tipo_evento" id="tipo_evento">
					<option>Concurso</option>
					<option>Concurso clasificatorio</option>
					<option>Concurso de práctica</option>
					<option>Sesión</option>
					<option>Curso</option>
				</select>
			</div>
			<div class="form-group">
				<label for="lugar_evento">Lugar</label>
				<textarea class="form-control" name="lugar_evento" id="lugar_evento" rows="1">Edificio de Ingeniería de Software e Ingeniería en Computación, Campus UAZ Siglo XXI</textarea>
			</div>
			<button type="submit" class="btn btn-primary mb-2">Agendar</button>
		</form>
	</div>
@stop
