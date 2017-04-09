@extends('admin.template.main')

@section('title','Lista de Personas')

@section('content')
	<a href="{{ route('admin.personas.create') }}" class="btn btn-success btn-xs  pull-right">Nueva Persona</a>
	<br>
	<hr>
	<!-- Buscador de personas -->
	{!! Form::open(['route' => 'admin.personas.index', 'method' => 'GET', 'class' => 'navbar-form pull-right' ]) !!}
		<div class="input-group">
  			{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Buscar Nombre...', 'aria-describedby' => 'search']) !!}
  			<span class="input-group-btn">
        		{!! Form::button('<span class="glyphicon glyphicon-search"></span>', ['type' => 'submit', 'class'=>'btn btn-default']) !!}
      		</span>
		</div>
	{!! Form::close() !!}
	<!-- Fin de buscador de personas -->
	<br>
	<br>
	<hr>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th><div class="text-right">Acción</div></th>
		</thead>
		<tbody>
			@foreach($personas as $persona)
			<tr>
				<td>{{ $persona->id }}</td>
				<td>{{ $persona->nombre }}</td>
				<td>
					<div class="text-right">
						<a href="{{ route('admin.personas.show', $persona->id) }}" class="btn btn-primary btn-xs">Ver</a>
						<a href="{{ route('admin.personas.edit', $persona->id) }}" class="btn btn-warning btn-xs">Editar</a>
						<a href="{{ route('admin.personas.destroy', $persona->id) }}" class="btn btn-danger btn-xs" onclick="return confirm('¿Desea eliminar la persona {{ $persona->nombre }}?')">Eliminar</a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<hr>
	{!! $personas->render() !!}
@endsection