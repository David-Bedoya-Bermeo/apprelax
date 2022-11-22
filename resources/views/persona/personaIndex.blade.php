@extends('mainEmpleado.plantillaMainE')
@section('contenidoPersona')
<!-- Contenido de la sección -->
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div align="center">
                    <h3 class="page-title mt-5">Datos Personales</h3>
                </div>
            </div>
        </div>
        <div class="col-lg-12">
            Datos Personales <a href="{{url('persona/create')}}" class=""><button class="btn btn-outline-primary"><i
                        class="fas fa-user-plus"></i></button>
            </a>
            Imprimir Pdf<a href="{{url('imprimirPersonas')}}" class="pull-right"> <button class="btn btn-success"><i
                        class="fa-solid fa-print"></i>
                </button> </a>
        </div>
    </div>
    <div class="table-responsive ">
        <table class="table table-striped table-hover">
            <thead>
                <th>Id</th>
                <th>Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Fecha Nacimiento</th>
                <th>Tipo Documento</th>
                <th>Numero Documento</th>
                <th>Dirección</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Id Persona</th>

            </thead>

            <div align="center">
                <h3 class="page-title mt-5"><b>Lista informacion personal</b></h3>
            </div>
            <tbody>
                @foreach($persona as $per)
                <tr>
                    <td>{{ $per->id }}</td>
                    <td>{{ $per->nombre }}</td>
                    <td>{{ $per->a_paterno }}</td>
                    <td>{{ $per->a_materno }}</td>
                    <td>{{ $per->fecha_Nacimiento }}</td>
                    <td>{{ $per->tipo_Documento }}</td>
                    <td>{{ $per->num_Documento }}</td>
                    <td>{{ $per->direccion }}</td>
                    <td>{{ $per->telefono }}</td>
                    <td>{{ $per->email }}</td>
                    <td>
                        <div class="btn-ad">
                            <a href="{{URL::action('App\http\Controllers\PersonaController@edit',$per->id)}}"><button
                                    class="btn btn-outline-primary"><i
                                        class="fa-solid fa-pen-to-square"></i></button></a>
                            <a href="" data-target="#modal-delete-{{$per->id}}" data-toggle="modal"> <button
                                    class="btn btn-outline-danger"><i class="fa-solid fa-trash"></i></button></a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection