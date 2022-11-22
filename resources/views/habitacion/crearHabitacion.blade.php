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
{!!Form::open(array('url'=>'habitacion','method'=>'POST','autocomplete'=>'off'))!!} {{Form::token()}}
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row align-items-center">
                <div class="col">
                    <h3 class="page-title mt-5">Agregar Habitación</h3>
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
                                <input class="form-control" type="text" id="nombre" name="nombre">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Piso Habitación</label>
                                <input class="form-control" type="text" id="numPiso" name="numPiso">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Tipo habitación</label>
                                <input class="form-control" type="text" id="tipo" name="tipo">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Descripción</label>
                                <textarea class="form-control" rows="5" id="descripcion" name="descripcion"></textarea>
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
                                <label>Cargar Imagen</label>
                                <div class="custom-file mb-3">
                                    <input type="file" class="custom-file-input" id="imagen" name="imagen">
                                    <label class="custom-file-label" for="imagen">Choose file</label>
                                </div>
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
                <button type="reset" class="btn btn-outline-danger">Limpiar <i class="fa-solid fa-eraser"></i></button>
            </div>
            <div class="btn-espacios">
                <a class="btn btn-outline-success" href="{{url('cliente')}}"><i
                        class="fa-solid fa-arrow-rotate-left"></i>
                    Regresar</a>
            </div>
        </div>
    </div>
</div>
@endsection