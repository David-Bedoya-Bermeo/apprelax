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
{!!Form::open(array('url'=>'empleado','method'=>'POST','autocomplete'=>'off'))!!} {{Form::token()}}
<div class="espacio">
    <div class="distribucion">
        <form>
            <div align="center">
                <h3>
                    <p>Registro de Empleado</p>
                </h3>
            </div>
            <div class="row formtype">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Codigo</label>
                        <input type="text" class="form-control" name="codigo" id="codigo" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Tipo Contrato</label>
                        <input type="text" class="form-control" name="tipoContrato" id="tipoContrato" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Salario</label>
                        <input class="form-control" type="text" name="salario" id="salario" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row formtype">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Estado</label>
                        <input type="text" class="form-control" name="estado" id="estado" placeholder="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Fecha Ingreso</label>
                        <div class="cal-icon">
                            <input type="text" class="form-control datetimepicker" name="fechaIngreso" id="fechaIngreso"
                                placeholder="">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Fecha Retiro</label>
                        <div class="cal-icon">
                            <input type="text" class="form-control datetimepicker" name="dia_Retiro" id="dia_Retiro"
                                placeholder="">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Id Persona</label>
                        <select name="persona_id" id="persona_id" class="form-control selectpicker"
                            data-livesearch="true" required>
                            <option value="" disabled selected>persona:</option>
                            @foreach($persona as $pe)
                            <option value="{{$pe->persona_id}}">{{ $pe->nombre }}-{{ $pe->a_paterno
                                }}-{{$pe->persona_id}}
                            </option>
                            @endforeach
                        </select>
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
                    <a class="btn btn-outline-success" href="{{url('empleado')}}"><i
                            class="fa-solid fa-arrow-rotate-left"></i>
                        Regresar</a>
                </div>
            </div>
        </form>

    </div>
</div>
{!!Form::close()!!}
@endsection