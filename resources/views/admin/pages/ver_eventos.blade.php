@extends('admin.layouts.admin_base')
@section('title')
<title>Ver eventos</title>
@stop
@section('content')
	<table class="table">
		<thead class="thead-dark">
			<tr>
				<th> Nombre </th>
				<th></th>
				<th></th>
				
			</tr>
		</thead>
		<tbody>
			@foreach($eventos as $evento)
			<tr>
				<td> {{ $evento->nombre_evento }} </td>
				<td>  
					<a class="btn btn-success" href=" {{ route('eventos.ver_evento_admin', $evento -> id) }} "> Editar </a>
				</td>
				<td>
					<form action = "{{ route('eventos.eliminar_evento') }}" method="post">
						@csrf
						<input name="id" id="id" hidden value="{{ $evento -> id }}"></input>
						<button type="submit" class="btn btn-danger"> Eliminar </button>
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@stop
