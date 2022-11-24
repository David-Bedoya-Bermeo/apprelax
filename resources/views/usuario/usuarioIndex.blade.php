@extends('mainEmpleado.plantillaMainE')
@section('contenidoUsuario')
<!-- Contenido de la sección -->
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title mt-5">Crear Usuario</h3>
                </div>
            </div>
        </div>
        <div class="btnRegistro">
            <a class="ml-4 text-sm" href="{{ route('register') }}"><button class="btn btn-outline-secondary">Register <i
                        class="fa-solid fa-user-plus"></i></button></a>
        </div>
        <div class="row">
            <div class="col-lg-12">
                Registrar usuario<a href="{{url('/register')}}" class=""><button class="btn btn-outline-info"><i
                            class="fas fa-user-tie"></i></button>
                </a>
            </div>
            <p></p>
            <table class="table table-striped table-hover">
                <thead>
                    <th>Id Usuario</th>
                    <th>Nombre</th>
                    <th>Correo</th>

                </thead>

                <div align="center">
                    <h3 class="page-title mt-5"><b>Lista informacion personal</b></h3>
                </div>
                @auth
                <tbody>
                    @foreach (Auth::user())
                    <tr>
                        <td>{{ Auth::user()->id }}</td>
                        <td>{{ Auth::user()->name }}</td>
                        <td>{{ Auth::user()->email }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endsection