@extends('admin.layouts.admin_base')
@section('title')
<title>Editar evento</title>
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
		<h1>Editar evento</h1>
		<form action = "{{route('eventos.crear_nuevo')}}" method="post">
			@csrf
			<div class="form-group">
				<label for="nombre_evento">Nombre</label>
				<textarea class="form-control" name = "nombre_evento" id="nombre_evento" rows="1"> {{ $evento -> nombre_evento }} </textarea>
			</div>
			<div class="form-group">
				<label for="descripcion_evento">Descripción</label>
				<textarea class="form-control" name="descripcion_evento" id="descripcion_evento" rows="1"> {{ $evento -> descripcion }} </textarea>
			</div>
			<div class="form-group">
				<label for="fecha_inicio">Fecha inicio</label>
				<input type="datetime-local" name="fecha_inicio" id = "fecha_inicio" value = "{{ $evento -> fecha_inicio }}">
			</div>
			<div class="form-group">
				<label for="fecha_fin">Fecha fin</label>
				<input type="datetime-local" name="fecha_fin" id = "fecha_fin" value = "{{ $evento -> fecha_fin }}">
			</div>
			<div class="form-group">
				<label for="nivel_evento">Nivel</label>
				<select class="form-control" name="nivel_evento" id="nivel_evento">
					<option @if( $evento -> nivel == 'primaria') selected @endif> 
						Primaria 
					</option>
					<option @if( $evento -> nivel == 'secundaria') selected @endif>
						Secundaria
					</option>
					<option @if( $evento -> nivel == 'primaria y secundaria') selected @endif>
						Primaria y secundaria
					</option>
					<option @if( $evento -> nivel == 'medio superior' ) selected @endif>
						Media superior
					</option>
					<option @if( $evento -> nivel == 'superior') selected @endif>
						Superior
					</option>
					<option @if( $evento -> nivel == 'general') selected @endif>
						General
					</option>
				</select>
			</div>
			<div class="form-group">
				<label for="tipo_evento">Tipo</label>
				<select class="form-control" name="tipo_evento" id="tipo_evento">
					<option @if( $evento -> tipo_evento == 'concurso') selected @endif>
						Concurso
					</option>
					<option @if( $evento -> tipo_evento == 'concurso clasificatorio') selected @endif>
						Concurso clasificatorio
					</option>
					<option @if( $evento -> tipo_evento == 'concurso de practica') selected @endif>
						Concurso de práctica
					</option>
					<option @if( $evento -> tipo_evento == 'sesion') selected @endif>
						Sesión
					</option>
					<option @if( $evento -> tipo_evento == 'curso') selected @endif>
						Curso
					</option>
				</select>
			</div>
			<div class="form-group">
				<label for="lugar_evento">Lugar</label>
				<textarea class="form-control" name="lugar_evento" id="lugar_evento" rows="1"> {{ $evento -> lugar }} </textarea>
			</div>
			<button type="submit" class="btn btn-primary mb-2"> Actualizar </button>
			
		</form>
	</div>
@stop
