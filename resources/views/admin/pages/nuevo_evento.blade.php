@extends('admin.layouts.admin_base')
@section('title')
<title>Administración olimpiadas de Tecnología de la UAIE</title>
@stop
@section('content')

	<div class="container">
		<h1>Nuevo evento</h1>
		<form action = "{{route('eventos.crear_nuevo')}}" method="post">
			@csrf
			<div class="form-group">
				<label for="nombre_evento">Nombre</label>
				@error('nombre_evento')
	    			<div class="alert alert-danger">{{ $message }}</div>
				@enderror
				<textarea class="form-control" name = "nombre_evento" id="nombre_evento" rows="1"></textarea>
			</div>
			<div class="form-group">
				<label for="descripcion_evento">Descripción</label>
				@error('descripcion')
	    			<div class="alert alert-danger">{{ $message }}</div>
				@enderror
				<textarea class="form-control" name="descripcion_evento" id="descripcion_evento" rows="1"></textarea>
			</div>
			<div class="form-group">
				@error('fecha_inicio')
	    			<div class="alert alert-danger">{{ $message }}</div>
				@enderror
				<label for="fecha_inicio">Fecha inicio</label>
				<input type="datetime-local" name="fecha_inicio" id = "fecha_inicio">
			</div>
			<div class="form-group">
				@error('fecha_fin')
	    			<div class="alert alert-danger">{{ $message }}</div>
				@enderror
				<label for="fecha_fin">Fecha fin</label>
				<input type="datetime-local" name="fecha_fin" id = "fecha_fin">
			</div>
			<div class="form-group">
				<label for="nivel_evento">Nivel</label>
				@error('nivel_evento')
	    			<div class="alert alert-danger">{{ $message }}</div>
				@enderror
				<select class="form-control" name="nivel_evento" id="nivel_evento">
					<option value="primaria">Primaria</option>
					<option value="secundaria">Secundaria</option>
					<option value="primaria y secundaria">Primaria y secundaria</option>
					<option value="media superior">Media superior</option>
					<option value="superior">Superior</option>
					<option value="general">General</option>
				</select>
			</div>
			<div class="form-group">
				<label for="tipo_evento">Tipo</label>
				@error('tipo_evento')
	    			<div class="alert alert-danger">{{ $message }}</div>
				@enderror
				<select class="form-control" name="tipo_evento" id="tipo_evento">
					<option value="concurso">Concurso</option>
					<option value="concurso clasificatorio">Concurso clasificatorio</option>
					<option value="concurso de practica">Concurso de práctica</option>
					<option value="sesion">Sesión</option>
					<option value="curso">Curso</option>
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
