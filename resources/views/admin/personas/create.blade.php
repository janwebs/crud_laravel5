@extends('admin.template.main')

@section('title','Crear Personas')

@section('content')

	{!! Form::open(['route'=>'admin.personas.store', 'method'=>'POST']) !!}
		<div class="form-group">
			{!! Form::label('nombre', 'Nombre') !!}
			{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Nombre', 'required']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('direccion', 'Direccion') !!}
			{!! Form::textarea('direccion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese Direccion', 'rows' => 2, 'cols' => 40]) !!}
		</div>
		<div class="form-group">
			{!! Form::label('sexo', 'Genero') !!}
			{!! Form::select('sexo', ['M' => 'Masculino', 'F' => 'Femenino'], null, ['class' => 'form-control', 'placeholder' => 'Seleccione una opcion']) !!}
		</div>
		<div class="form-group">
			{!! Form::label('fecha_nacimiento', 'Fecha de Nacimiento (AAAA/MM/DD)') !!}
			{!! Form::date('fecha_nacimiento', null, ['class' => 'form-control datepicker', 'data-date-format' => 'yyyy-mm-dd']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Registrar', ['class'=>'btn btn-primary']) !!}
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