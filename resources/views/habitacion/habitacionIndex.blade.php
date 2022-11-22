@extends('mainEmpleado.plantillaMainE')
@section('contenidoHabitacion')
<!-- Contenido de la sección -->
<div class="page-wrapper">
	<div class="content container-fluid">
		<div class="page-header">
			<div class="row align-items-center">
				<div class="col">
					<h3 class="page-title mt-5">Habitaciones</h3>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">

				Crear Habitacion <a href="{{url('habitacion/create')}}" class=""><button
						class="btn btn-outline-success"><i class="fa-solid fa-door-closed"></i></button>
				</a>
				<p> </p>
			</div>
		</div>
	</div>
	<table class="table table-striped table-hover">
		<thead>
			<th>Id Habitacion</th>
			<th>Nombre Habitacion</th>
			<th>Piso Habitación</th>
			<th>Tipo Habitación</th>
			<th>Descripción</th>
			<th>Estado</th>
			<th>Imagen</th>

		</thead>

		<div align="center">
			<h3 class="page-title mt-5"><b>Listado de Habitaciones</b></h3>
		</div>
		<tbody>
			@foreach($habitacion as $hab)
			<tr>
				<td>{{ $hab->id }}</td>
				<td>{{ $hab->nombre }}</td>
				<td>{{ $hab->numPiso }}</td>
				<td>{{ $hab->tipo }}</td>
				<td>{{ $hab->descripcion }}</td>
				<td>{{ $hab->estado }}</td>
				<td>{{ $hab->imagen }}</td>
				<td>
					<div class="btn-ad">
						<a href="{{URL::action('App\http\Controllers\HabitacionController@edit',$hab->id)}}"><button
								class="btn btn-outline-primary"><i class="fa-solid fa-pen-to-square"></i></button></a>
						<a href="" data-target="#modal-delete-{{$hab->id}}" data-toggle="modal"> <button
								class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></a>
					</div>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</div>
{{Form::Close()}}
@endsection