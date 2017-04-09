@extends('admin.template.main')

@section('title','Editar Persona '.$persona->nombre)

@section('content')

	{!! Form::open(['route'=>['admin.personas.update', $persona], 'method'=>'PUT']) !!}
		<div class="form-group">
			{!! Form::label('nombre', 'Nombre') !!}
			{!! Form::text('nombre', $persona->nombre, ['class' => 'form-control', 'placeholder' => 'Ingrese Nombre', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('direccion', 'Direccion') !!}
			{!! Form::textarea('direccion', $persona->direccion, ['class' => 'form-control', 'placeholder' => 'Ingrese direccion', 'rows' => 2, 'cols' => 40]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('sexo', 'Genero') !!}
			{!! Form::select('sexo', ['M' => 'Masculino', 'F' => 'Femenino'], $persona->sexo, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('fecha_nacimiento', 'Fecha de Nacimiento (AAAA/MM/DD)') !!}
			{!! Form::date('fecha_nacimiento', $persona->fecha_nacimiento, ['class' => 'form-control datepicker', 'data-date-format' => 'yyyy-mm-dd']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Guardar', ['class'=>'btn btn-primary']) !!}
		</div> 
	{!!	Form::close() !!}
@endsection
@section('js')	
	<script>
		/* control fecha_nacimiento */
		$('.datepicker').datepicker({  
           format: 'yyyy-mm-dd'
        });  
	</script>
@endsection	