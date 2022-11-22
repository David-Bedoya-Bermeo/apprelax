@extends('mainEmpleado.plantillaMainE')
@section('contenidoTarifa')
<!-- Contenido de la sección -->
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title mt-5">Crear Tarifa</h3>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-12">
                Crear Tarifa <a href="{{url('tarifa/create')}}" class=""><button class="btn btn-outline-success"><i
                            class="fas fa-user-plus"></i></button>
                </a>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <th>Id</th>
                <th>Precio</th>
                <th>Id Plan</th>
            </thead>

            <div align="center">
                <h3 class="page-title mt-5"><b>Lista Tarifas</b></h3>
            </div>
            <tbody>
                @foreach($tarifa as $tar)
                <tr>
                    <td>{{ $tar->id }}</td>
                    <td>{{ $tar->precio }}</td>
                    <td>{{ $tar->plan_id }}</td>

                    <td>
                        <a href="{{URL::action('App\http\Controllers\TarifaController@edit',$tar->id)}}"><button
                                class="btn btn-primary">Actualizar</button></a>
                        <a href="" data-target="#modal-delete-{{$tar->id}}" data-toggle="modal"> <button
                                class="btn btn-danger">Eliminar</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection