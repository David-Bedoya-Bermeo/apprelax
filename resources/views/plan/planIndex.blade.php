@extends('mainEmpleado.plantillaMainE')
@section('contenidoPlan')
<!-- Contenido de la sección -->
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title mt-5">Planes</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <a href="{{url('plan/create')}}" class="pull-right">
                    <button class="btn btn-success">Crear Plan</button>
                </a>
                <p> </p>
            </div>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <th>Id</th>
            <th>Nombre</th>
            <th>Descripción</th>
        </thead>

        <div align="center">
            <h3 class="page-title mt-5"><b>Listado de Planes</b></h3>
        </div>
        <tbody>
            @foreach($plan as $pl)
            <tr>
                <td>{{ $pl->id }}</td>
                <td>{{ $pl->nombre }}</td>
                <td>{{ $pl->descripcion }}</td>
                <td>
                    <div class="btn-ad">
                        <a href="{{URL::action('App\http\Controllers\PlanController@edit',$pl->id)}}"><button
                                class="btn btn-outline-primary"><i class="fa-solid fa-pen-to-square"></i></button></a>
                        <a href="" data-target="#modal-delete-{{$pl->id}}" data-toggle="modal"> <button
                                class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection