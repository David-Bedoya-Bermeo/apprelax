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
{!!Form::open(array('url'=>'persona','method'=>'POST','autocomplete'=>'off'))!!} {{Form::token()}}
<div class="espacio">
    <div class="distribucion">
        <form>
            <div align="center">
                <h3>
                    <p>Registro de Persona</p>
                </h3>
            </div>
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
                        <input class="form-control" type="text" name="a_paterno" id="a_paterno" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Segundo Apellido</label>
                        <input class="form-control" type="text" name="a_materno" id="a_materno" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row formtype">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Fecha nacimiento</label>
                        <input type="text" class="form-control datetimepicker" name="fecha_Nacimiento"
                            id="fecha_Nacimiento" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Edad</label>
                        <input type="text" class="form-control" name="edad" id="edad">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Tipo Documento</label>
                        <input type="text" class="form-control" name="tipo_Documento" id="tipo_Documento"
                            placeholder="">
                    </div>
                </div>
            </div>
            <div class="row formtype">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Numero Documento</label>
                        <input class="form-control" type="text" name="num_Documento" id="num_Documento" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Direccion Residencia</label>
                        <input class="form-control" type="text" type="text" name="direccion" id="direccion"
                            placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Telefono</label>
                        <input class="form-control" type="text" type="text" name="telefono" id="telefono"
                            placeholder="">
                    </div>
                </div>
            </div>
            <div class="row formtype">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Correo</label>
                        <input class="form-control" type="text" name="email" id="email">
                    </div>
                </div>
            </div>
            <div class="estilo-espacio">
                <div class="btn-espacios">
                    </button><button class="btn btn-outline-primary">Guardar<i class="fa-solid fa-floppy-disk"></i><span
                            class="glyphicon glyphicon-ok"></span></button>
                </div>
                <div class="btn-espacios">
                    <button type="reset" class="btn btn-outline-danger">Limpiar <i
                            class="fa-solid fa-eraser"></i></button>
                </div>
                <div class="btn-espacios">
                    <a class="btn btn-outline-success" href="{{url('cliente')}}"><i
                            class="fa-solid fa-arrow-rotate-left"></i>
                        Regresar</a>
                </div>
            </div>
        </form>
    </div>
</div>
{!!Form::close()!!}
@endsection