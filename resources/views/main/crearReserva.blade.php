@extends('layouts.app')
@section('content')
<!-- Fonts REGISTRO -->
<!-- Font Icon -->
<link rel="stylesheet" href="{{ asset('registro/fonts/material-icon/css/material-design-iconic-font.min.css')}}">
<!-- Main css -->
<link rel="stylesheet" href="{{ asset('registro/css/style.css')}}">
<link rel="stylesheet" href="{{ asset('registro/css/estilos.css')}}">

<body>
    {!!Form::open(array('url'=>'reserva','method'=>'POST','autocomplete'=>'off'))!!} {{Form::token()}}
    <div class="page-wrapper">
        <form>
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="page-title mt-5">Crear Reserva</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form>
                            <div class="row formtype">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Cantidad Personas</label>
                                        <input class="form-control" type="text" id="cantidad_Personas"
                                            name="cantidad_Personas">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Fecha Reserva</label>
                                        <div class="time-icon">
                                            <input class="form-control datetimepicker" type="text" id="fecha_Reserva"
                                                name="fecha_Reserva">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Día Llegada</label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" type="text" id="dia_Llegada"
                                                name="dia_Llegada">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Día Salida</label>
                                        <div class="cal-icon">
                                            <input class="form-control datetimepicker" type="text" id="dia_Salida"
                                                name="dia_Salida">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Estado</label>
                                        <input class="form-control" type="text" id="estado" name="estado">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Id Habitacion</label>
                                        <select name="habitacion_id" id="habitacion_id"
                                            class="form-control selectpicker" data-livesearch="true" required>
                                            <option value="" disabled selected>habitacion:</option>
                                            @foreach($habitacion as $hab)
                                            <option value="{{$hab->habitacion_id}}">
                                                {{$hab->tipo}}-{{$hab->tipo}}{{$hab->habitacion_id}}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="estilo-espacio">
                    <div class="btn-espacios">
                        </button><button class="btn btn-outline-primary">Guardar<i
                                class="fa-solid fa-floppy-disk"></i><span
                                class="glyphicon glyphicon-ok"></span></button>
                    </div>
                    <div class="btn-espacios">
                        <button type="reset" class="btn btn-outline-danger">Limpiar <i
                                class="fa-solid fa-eraser"></i></button>
                    </div>
                    <div class="btn-espacios">
                        <a class="btn btn-outline-success" href="{{url('reserva')}}"><i
                                class="fa-solid fa-arrow-rotate-left"></i>
                            Regresar</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
    {!!Form::close()!!}
    </div>
    </div>

    </div>
    </div>

    <div class="row mb-3">
        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{
            __('Confirmación Contraseña') }}</label>

        <div class="col-md-6">
            <input id="password-confirm" type="password"
                class="input100 input100 @error('password') is-invalid @enderror" name="password_confirmation" required
                autocomplete="new-password"><span toggle="#password"
                class="zmdi zmdi-eye field-icon toggle-password"></span>
            @error('Confirmacion Contraseña')
            <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
    </div>

    <div class="row mb-3">
        <label for="avatars" class="col-md-4 col-form-label text-md-end">{{
            __('Ingrese su avatar') }}</label>

        <div class="col-md-6">
            <input id="password-confirm" type="file" class="" name="password_confirmation" required
                autocomplete="new-password">
        </div>
    </div>
    <div class="row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="login100-form-btn">
                {{ __('Registrar') }}
            </button>
        </div>
    </div>
    </form>
    </div>
</body>
<!-- Scripts Registro-->
<script src="{{ asset('registro/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('registro/js/main.js')}}"></script>
@endsection