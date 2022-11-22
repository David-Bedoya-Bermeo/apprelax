@extends('mainEmpleado.plantillaMainE')
@section('contenidoHabitacion')
@if (count($errors)>0)
<div class="alert alert-danger">
    <ul> @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title mt-5">Editar Habitación</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <form>
                    <div class="row formtype">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Nombre Habitación</label>
                                <input class="form-control" type="text" value="{{$habitacion->nombre}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Piso Habitación</label>
                                <input class="form-control" type="text" value="{{$habitacion->numPiso}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tipo habitación</label>
                                <input class="form-control" type="text" value="{{$habitacion->tipo}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Descripción</label>
                                <Input class="form-control" rows="5" id="decripcion" name="descripcion"
                                    value="{{$habitacion->descripcion}}"></textarea>
                            </div>
                        </div>
                        <div class=" col-md-4">
                            <div class="form-group">
                                <label>Estado</label>
                                <input class="form-control" type="text" value="{{$habitacion->estado}}">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Cargar Imagen</label>
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="imagen" name="imagen"
                                        value="{{$habitacion->imagen}}">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="estilo-espacio">
            <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-refresh"></span>
                Actualizar </button>
        </div>
        <a class="btn btn-info" type="reset" href="{{url('habitacion')}}"><span class="glyphicon glyphicon-home"></span>
            Regresar
        </a>
    </div>
</div>
@endsection