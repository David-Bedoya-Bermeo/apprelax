@extends('mainEmpleado.plantillaMainE')
@section('contenidoReserva')
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title mt-5">Reserva</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <a href="{{url('reserva/create')}}" class="pull-right">
                    <button class="btn btn-success">Crear Reserva</button>
                </a>
                <p> </p>
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <th>Id Reserva</th>
            <th>Numero Personas</th>
            <th>Fecha Reserva</th>
            <th>Día Llegada</th>
            <th>Día Salida</th>
            <th>Estado</th>
            <th>Usuario Id</th>
            <th>Habitacion Id</th>
            <th>Cliente Id</th>
            <th>Empleado</th>
            <th>Opciones</th>
        </thead>

        <div align="center">
            <h3 class="page-title mt-5"><b>Listado de Reservas</b></h3>
        </div>
        <tbody>
            @foreach($reserva as $res)
            <tr>
                <td>{{ $res->id }}</td>
                <td>{{ $res->cantidad_Personas }}</td>
                <td>{{ $res->fecha_Reserva }}</td>
                <td>{{ $res->dia_Llegada }}</td>
                <td>{{ $res->dia_Salida }}</td>
                <td>{{ $res->estado }}</td>
                <td>{{ $res->user_id}}</td>
                <td>{{ $res->cliente_id}}</td>
                <td>{{ $res->empleado_id }}</td>
                <td>
                    <div class="btn-ad">
                        <a href="{{URL::action('App\http\Controllers\HabitacionController@edit',$res->id)}}"><button
                                class="btn btn-outline-primary"><i class="fa-solid fa-pen-to-square"></i></button></a>
                        <a href="" data-target="#modal-delete-{{$res->id}}" data-toggle="modal"> <button
                                class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection