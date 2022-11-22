@extends('mainEmpleado.plantillaMainE')
@section('contenidoReserva')
<div class="espacio">
    <div class="distribucion">
        <form>
            <div align="center">
                <h3>
                    <p>Crear Reserva</p>
                </h3>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Cantidad Personas</label>
                    <input class="form-control" type="text" id="cantidad_Personas" name="cantidad_Personas"
                        value="{{$reserva->cantidad_Personas}}">
                </div>
            </div>

            <div class="row formtype">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Fecha Reserva</label>
                        <input class="form-control" type="text" id="fecha_Reserva" name="fecha_Reserva"
                            value="{{$reserva->fecha_Reserva}}">>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Día Llegada</label>
                        <div class="cal-icon">
                            <input class="form-control" type="text" id="dia_Llegada" name="dia_Llegada"
                                value="{{$reserva->dia_Llegada}}">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Estado</label>
                        <div class="time-icon">
                            <input class="form-control" type="text" id="estado" name="estado"
                                value="{{$reserva->estado}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="estilo-espacio">
                <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-refresh"></span>
                    Actualizar </button>
            </div>
            <a class="btn btn-info" type="reset" href="{{url('reserva')}}"><span
                    class="glyphicon glyphicon-home"></span>
                Regresar
            </a>
        </form>
    </div>
</div>
@endsection