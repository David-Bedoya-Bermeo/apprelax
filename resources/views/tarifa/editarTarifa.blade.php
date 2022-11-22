@extends('mainEmpleado.plantillaMainE')
@section('contenidoTarifa')
@if (count($errors)>0)
<div class="alert alert-danger">
    <ul> @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
{{Form::open(array('action'=>array('App\http\Controllers\TarifaController@update',
$tarifa->id),'method'=>'patch'))}}
<div class="espacio">
    <div class="distribucion">
        <form>
            <div align="center">
                <h3>
                    <p>Editar Tarifa</p>
                </h3>
            </div>

            <div class="row formtype">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Id</label>
                        <input class="form-control" type="text" name="precio" id="precio" value="{{$tarifa->precio}}">
                    </div>
                </div>
                <div class="estilo-espacio">
                    <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-refresh"></span>
                        Actualizar </button>
                </div>
                <a class="btn btn-info" type="reset" href="{{url('tarifa')}}"><span
                        class="glyphicon glyphicon-home"></span> Regresar
                </a>
        </form>
    </div>
</div>
{!!Form::close()!!}
@endsection