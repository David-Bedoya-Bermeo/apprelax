@extends('mainEmpleado.plantillaMainE')
@section('contenidoPersona')
@if (count($errors)>0)
<div class="alert alert-danger">
    <ul> @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
{{Form::open(array('action'=>array('App\http\Controllers\PersonaController@update',
$persona->id),'method'=>'patch'))}}
<div class="espacio">
    <div class="distribucion">
        <form>
            <div align="center">
                <h3>
                    <p>Editar Datos Personales</p>
                </h3>
            </div>
            <div class="row formtype">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input class="form-control" type="text" name="nombre" id="nombre" value="{{$persona->nombre}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Primer Apellido</label>
                        <input class="form-control" type="text" name="a_paterno" id="a_paterno"
                            value="{{$persona->a_paterno}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Segundo Apellido</label>
                        <input class="form-control" type="text" name="a_materno" id="a_materno"
                            value="{{$persona->a_materno}}">
                    </div>
                </div>
            </div>
            <div class="row formtype">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Fecha Nacimiento</label>
                        <div class="cal-icon">
                            <input class="form-control datetimepicker" type="text" name="fecha_Nacimiento"
                                id="fecha_Nacimiento" value="{{$persona->fecha_Nacimiento}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Edad</label>
                        <input class="form-control" type="text" name="edad" id="edad" value="{{$persona->edad}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Tipo Documento</label>
                        <input class="form-control" type="text" name="tipo_Documento" id="tipo_Documento"
                            value="{{$persona->tipo_Documento}}">
                    </div>
                </div>
            </div>
            <div class="row formtype">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Numero Documento</label>
                        <input class="form-control" type="text" name="num_Documento" id="num_Documento"
                            value="{{$persona->num_Documento}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Direccion</label>
                        <input type="text" class="form-control" name="direccion" id="direccion"
                            value="{{$persona->direccion}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Telefono</label>
                        <input class="form-control" type="text" name="telefono" id=" telefono"
                            value="{{$persona->telefono}}">
                    </div>
                </div>
            </div>
            <div class="row formtype">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Correo</label>
                        <input class="form-control" type="text" name="email" id="email" value="{{$persona->email}}">
                    </div>
                </div>
            </div>
            <div class="estilo-espacio">
                <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-refresh"></span>
                    Actualizar </button>
            </div>
            <a class="btn btn-info" type="reset" href="{{url('persona')}}"><span
                    class="glyphicon glyphicon-home"></span>
                Regresar
            </a>
        </form>
    </div>
</div>
{!!Form::close()!!}
@endsection