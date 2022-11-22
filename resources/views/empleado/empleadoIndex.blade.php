@extends('mainEmpleado.plantillaMainE')
@section('contenidoPersona')
<!-- Contenido de la sección -->
<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title mt-5">Datos Personales</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				Datos personales <a href="{{url('persona')}}" class="pull-right"><button
						class="btn btn-outline-primary"><i class="fa-solid fa-file-signature"></i></button>
				</a>
			</div>
			<p> </p>
			<div class="col-lg-12">
				Crear Datos Empleado <a href="{{url('empleado/create')}}" class="pull-right">
					<button class="btn btn-outline-success"><i class="fa-solid fa-user-tie"></i></button>
				</a>
			</div>
		</div>
	</div>
	<table class="table table-success table-striped">
		<thead>
			<th>Id persona</th>
			<th>Id Empleado</th>
			<th>Codigo</th>
			<th>Tipo Contrato</th>
			<th>Salario</th>
			<th>Estado</th>
			<th>Fecha Ingreso</th>
			<th>Fecha Retiro</th>
		</thead>

		<div align="center">
			<h3 class="page-title mt-5"><b>Lista Empleados</b></h3>
		</div>
		<tbody>
			@foreach($empleado as $emp)
			<tr>
				<td>{{ $emp->id}}</td>
				<td>{{ $emp->persona_id}}</td>
				<td>{{ $emp->codigo}}</td>
				<td>{{ $emp->tipoContrato}}</td>
				<td>{{ $emp->salario}}</td>
				<td>{{ $emp->estado}}</td>
				<td>{{ $emp->fechaIngreso}}</td>
				<td>{{ $emp->fechaRetiro}}</td>
				<td>
					<a href="{{URL::action('App\http\Controllers\EmpleadoController@edit',$emp->id)}}"><button
							class="btn btn-outline-primary"><i class="fa-solid fa-pen-to-square"></i></button></a>

					<a href="" data-target="#modal-delete-{{$emp->id}}" data-toggle="modal"> <button
							class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
@endsection