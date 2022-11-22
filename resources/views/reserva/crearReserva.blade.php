@extends('mainEmpleado.plantillaMainE')
@section('contenidoReserva')
@if (count($errors)>0)
<div class="alert alert-danger">
    <ul> @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
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
                                    <select name="habitacion_id" id="habitacion_id" class="form-control selectpicker"
                                        data-livesearch="true" required>
                                        <option value="" disabled selected>habitacion:</option>
                                        @foreach($habitacion as $hab)
                                        <option value="{{$hab->habitacion_id}}">
                                            {{$hab->nombre}}-{{$hab->tipo}}{{$hab->habitacion_id}}
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
                    </button><button class="btn btn-outline-primary">Guardar<i class="fa-solid fa-floppy-disk"></i><span
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
@endsection