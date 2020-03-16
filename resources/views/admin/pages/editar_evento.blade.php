@extends('admin.layouts.admin_base')
@section('title')
<title>Editar evento</title>
@stop
@section('content')

	<div class="container">
		<h1>Editar evento</h1>
		<form action = "{{route('eventos.crear_nuevo')}}" method="post">
			@csrf
			<input name="id" id="id" hidden value="{{ $evento -> id }}"></input>
			<div class="form-group">
				<label for="nombre_evento">Nombre</label>
				@error('nombre_evento')
	    			<div class="alert alert-danger">{{ $message }}</div>
				@enderror
				<textarea class="form-control" name = "nombre_evento" id="nombre_evento" rows="1"> {{ $evento -> nombre_evento }} </textarea>
			</div>
			<div class="form-group">
				<label for="descripcion_evento">Descripción</label>
				@error('descripcion')
	    			<div class="alert alert-danger">{{ $message }}</div>
				@enderror
				<textarea class="form-control" name="descripcion_evento" id="descripcion_evento" rows="1"> {{ $evento -> descripcion }} </textarea>
			</div>
			<div class="form-group">
				@error('fecha_inicio')
	    			<div class="alert alert-danger">{{ $message }}</div>
				@enderror
				<label for="fecha_inicio">Fecha inicio</label>
				<input type="datetime-local" name="fecha_inicio" id = "fecha_inicio" value = "{{ $evento -> fecha_inicio }}">
			</div>
			<div class="form-group">
				@error('fecha_inicio')
	    			<div class="alert alert-danger">{{ $message }}</div>
				@enderror
				<label for="fecha_fin">Fecha fin</label>
				<input type="datetime-local" name="fecha_fin" id = "fecha_fin" value = "{{ $evento -> fecha_fin }}">
			</div>
			<div class="form-group">
				<label for="nivel_evento">Nivel</label>
				@error('nivel_evento')
	    			<div class="alert alert-danger">{{ $message }}</div>
				@enderror
				<select class="form-control" name="nivel_evento" id="nivel_evento">
					<option value="primaria" @if( $evento -> nivel == 'primaria') selected @endif> 
						Primaria 
					</option>
					<option value="secundaria" @if( $evento -> nivel == 'secundaria') selected @endif>
						Secundaria
					</option>
					<option value="primaria y secundaria" @if( $evento -> nivel == 'primaria y secundaria') selected @endif>
						Primaria y secundaria
					</option>
					<option value="media superior" @if( $evento -> nivel == 'medio superior' ) selected @endif>
						Media superior
					</option>
					<option value="superior" @if( $evento -> nivel == 'superior') selected @endif>
						Superior
					</option>
					<option value="general" @if( $evento -> nivel == 'general') selected @endif>
						General
					</option>
				</select>
			</div>
			<div class="form-group">
				<label for="tipo_evento">Tipo</label>
				<select class="form-control" name="tipo_evento" id="tipo_evento">
					<option value="concurso" @if( $evento -> tipo_evento == 'concurso') selected @endif>
						Concurso
					</option>
					<option value="concurso clasificatorio" @if( $evento -> tipo_evento == 'concurso clasificatorio') selected @endif>
						Concurso clasificatorio
					</option>
					<option value="concurso de practica" @if( $evento -> tipo_evento == 'concurso de practica') selected @endif>
						Concurso de práctica
					</option>
					<option value="sesion" @if( $evento -> tipo_evento == 'sesion') selected @endif>
						Sesión
					</option>
					<option value="curso" @if( $evento -> tipo_evento == 'curso') selected @endif>
						Curso
					</option>
				</select>
			</div>
			<div class="form-group">
				<label for="lugar_evento">Lugar</label>
				<textarea class="form-control" name="lugar_evento" id="lugar_evento" rows="1"> {{ $evento -> lugar }} </textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary mb-2">Actualizar</button>
				<a class="btn btn-danger" href="{{ route('eventos.ver_eventos_admin') }}">Cancelar</a>
			</div>
		</form>
	</div>
@stop
