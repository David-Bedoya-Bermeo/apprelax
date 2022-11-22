@extends('mainEmpleado.plantillaMainE')
@section('contenidoPlan')
@if (count($errors)>0)
<div class="alert alert-danger">
    <ul> @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
{{Form::open(array('action'=>array('App\http\Controllers\PlanController@update',
$plan->id),'method'=>'patch'))}}
<div class="espacio">
    <div class="distribucion">
        <form>
            <div align="center">
                <h3>
                    <p>Editar Plan</p>
                </h3>
            </div>

            <div class="row formtype">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input class="form-control" type="text" name="nombre" id="nombre" value="{{$plan->nombre}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Descripción</label>
                        <input class="form-control" type="text" name="descripcion" id="descripcion"
                            value="{{$plan->descripcion}}">
                    </div>
                </div>

                <div class="estilo-espacio">
                    <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-refresh"></span>
                        Actualizar </button>
                </div>
                <a class="btn btn-info" type="reset" href="{{url('habitacion')}}"><span
                        class="glyphicon glyphicon-home"></span>
                    Regresar
                </a>aqui
        </form>
    </div>
</div>
{!!Form::close()!!}
@endsection