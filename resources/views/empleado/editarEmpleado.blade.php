@extends('mainEmpleado.plantillaMainE')
@section('contenidoEmpleado')
@if (count($errors)>0)
<div class="alert alert-danger">
    <ul> @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
{{Form::open(array('action'=>array('App\http\Controllers\EmpleadoController@update',
$empleado->id),'method'=>'patch'))}}
<div class="espacio">
    <div class="distribucion">
        <form>
            <div align="center">
                <h3>
                    <p>Editar Empleado</p>
                </h3>
            </div>
            <div class="row formtype">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Codigo</label>
                        <input class="form-control" type="text" name="codigo" id="codigo" value="{{$empleado->codigo}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Tipo Contrato</label>
                        <input class="form-control" type="text" name="tipoContrato" id="tipoContrato"
                            value="{{$empleado->tipoContrato}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Salario</label>
                        <input class="form-control" type="text" name="salario" id="salario"
                            value="{{$empleado->salario}}">
                    </div>
                </div>
            </div>
            <div class="row formtype">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Estado</label>
                        <input class="form-control" type="text" name="estado" id="estado" value="{{$empleado->estado}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Fecha Ingreso</label>
                        <div class="cal-icon">
                            <input type="text" class="form-control datetimepicker" name="fechaIngreso" id="fechaIngreso"
                                value="{{$empleado->fechaIngreso}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Fecha Retiro</label>
                        <div class="cal-icon">
                            <input type="text" class="form-control datetimepicker" name="fechaRetiro" id="fechaRetiro"
                                value="{{$empleado->dia_Retiro}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Id Persona</label>
                        <select name="persona_id" id="persona_id" class="form-control selectpicker"
                            data-livesearch="true" required>
                            <option value="" disabled selected>persona:</option> @foreach($persona as $per)
                            <option value="{{$per->persona_id}}">{{ $per->nombre }}-{{ $per->a_paterno
                                }}-{{$per->persona_id}}
                            </option> @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="estilo-espacio">
                <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-refresh"></span>
                    Actualizar </button>
            </div>
            <a class="btn btn-info" type="reset" href="{{url('empleado')}}"><span
                    class="glyphicon glyphicon-home"></span>
                Regresar
            </a>
        </form>
    </div>
</div>
{!!Form::close()!!}
@endsection