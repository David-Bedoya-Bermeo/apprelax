@extends('mainEmpleado.plantillaMainE')
@section('contenidoCliente')
<!-- Contenido de la sección -->
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title mt-5" align="center">Registro Cliente</h3>
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
                Crear Cliente <a href="{{url('cliente/create')}}" class="pull-right">
                    <button class="btn btn-outline-success"><i class="fas fa-user-plus"></i></button>
                </a>
            </div>
        </div>
    </div>
    <table class="table table-success table-striped">
        <thead>
            <th>Id</th>
            <th>Id persona</th>
            <th>tipo cliente</th>
            <th>nombreEmpresa</th>
            <th>Nit</th>
            <th>País</th>
            <th>Opciones</th>
        </thead>
        <div align="center">
            <h3 class="page-title mt-5"><b>Lista Cliente</b></h3>
        </div>
        <tbody>
            @foreach($cliente as $cli)
            <tr>
                <td>{{ $cli->id }}</td>
                <td>{{ $cli->persona_id}}</td>
                <td>{{ $cli->tipo_Cliente }}</td>
                <td>{{ $cli->nombreEmpresa}}</td>
                <td>{{ $cli->nit}}</td>
                <td>{{ $cli->pais }}</td>
                <td>
                    <div class="btn-ad">
                        <a href="{{URL::action('App\http\Controllers\ClienteController@edit',$cli->id)}}"><button
                                class="btn btn-outline-primary"><i class="fa-solid fa-pen-to-square"></i></button></a>
                        <a href="" data-target="#modal-delete-{{$cli->id}}" data-toggle="modal"> <button
                                class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection