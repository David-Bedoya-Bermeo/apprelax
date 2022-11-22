@extends('layouts.app')
@section('content')
<!-- Fonts REGISTRO -->
<!-- Font Icon -->
<link rel="stylesheet" href="{{ asset('registro/fonts/material-icon/css/material-design-iconic-font.min.css')}}">
<!-- Main css -->
<link rel="stylesheet" href="{{ asset('registro/css/style.css')}}">
<link rel="stylesheet" href="{{ asset('registro/css/estilos.css')}}">

<body>
    <div class="container limiter">
        <div class="row justify-content-center">
            <div class="wrap-login100">
                <div class="col-md-12">
                    <div class="card ancho">
                        <div class="card-header login100-form-title" aria-hidden="true">{{ __('Datos Personales') }}
                        </div>
                        <div class="card-body">
                            {!!Form::open(array('url'=>'persona','method'=>'POST','autocomplete'=>'off'))!!}
                            {{Form::token()}}
                            <div class="espacio">
                                <div class="distribucion">
                                    <form>
                                        <div class="row formtype">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Nombre</label>
                                                    <input class="form-control" type="text" name="nombre" id="nombre"
                                                        placeholder="Nombre completos">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Primer Apellido</label>
                                                    <input class="form-control" type="text" name="a_paterno"
                                                        id="a_paterno" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row formtype">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Segundo Apellido</label>
                                                    <input class="form-control" type="text" name="a_materno"
                                                        id="a_materno" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Fecha nacimiento</label>
                                                    <input type="text" class="form-control datetimepicker"
                                                        name="dia_Nacimiento" id="dia_Nacimiento" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row formtype">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Tipo Documento</label>
                                                    <select class="form-control" id="tipo_Documento"
                                                        name="tipo_Documento">
                                                        <option>Seleccione</option>
                                                        <option value="Cedula Ciudadania">Cedula Ciudadania</option>
                                                        <option value="Cedula Extranjera">Cedula Extranjera</option>
                                                        <option value="Pasaporte">Pasaporte</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Numero Documento</label>
                                                    <input class="form-control" type="text" name="num_Documento"
                                                        id="num_Documento" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row formtype">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Direccion Residencia</label>
                                                    <input class="form-control" type="text" type="text" name="direccion"
                                                        id="direccion" placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Telefono</label>
                                                    <input class="form-control" type="text" type="text" name="telefono"
                                                        id="telefono" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row formtype">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Correo</label>
                                                    <input class="form-control" type="text" name="correo" id="correo"
                                                        placeholder="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label>Fecha Registro</label>
                                                    <input type="text" class="form-control datetimepicker"
                                                        name="fecha_Registro" id="fecha_Registro" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-4 offset-md-4">
                                    <div class="estilo-espacio">
                                        <a href=""><button class="login100-form-btn">Guardar</button></a>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                    <br>
                    <div class="card ancho">
                        <div class="card-header login100-form-title" aria-hidden="true">{{ __('Registro') }}</div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                                @csrf

                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre')
                                        }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                            class="input100 @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo
                                        Electronico') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email"
                                            class="input100 @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{
                                        __('Contraseña') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="input100 @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password"><span toggle="#password"
                                            class="zmdi zmdi-eye field-icon toggle-password"></span>
                                        @error('Contraseña')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="row mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{
                                        __('Confirmación Contraseña') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password"
                                            class="input100 input100 @error('password') is-invalid @enderror"
                                            name="password_confirmation" required autocomplete="new-password"><span
                                            toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
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
                                        <input id="password-confirm" type="file" class="" name="password_confirmation"
                                            required autocomplete="new-password">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>
<!-- Scripts Registro-->
<script src="{{ asset('registro/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('registro/js/main.js')}}"></script>
@endsection