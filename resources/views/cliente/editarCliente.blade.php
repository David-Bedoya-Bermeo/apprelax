@extends('mainEmpleado.plantillaMainE')
@section('contenidoCliente')
@if (count($errors)>0)
<div class="alert alert-danger">
    <ul> @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif
{{Form::open(array('action'=>array('App\http\Controllers\ClienteController@update',
$cliente->id),'method'=>'patch'))}}
<div class="espacio">
    <div class="distribucion">
        <form>
            <div align="center">
                <h3>
                    <p>Editar Cliente</p>
                </h3>
            </div>
            <div class="row formtype">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Tipo Cliente</label>
                        <input class="form-control" type="text" name="tipo_Cliente" id="tipo_Cliente"
                            value="{{$cliente->tipo_Cliente}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nombre Empresa</label>
                        <input class="form-control" type="text" name="nombreEmpresa" id="nombreEmpresa"
                            value="{{$cliente->nombreEmpresa}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nit</label>
                        <input class="form-control" type="text" name="nit" id="nit" value="{{$cliente->nit}}">
                    </div>
                </div>
            </div>
            <div class="row formtype">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>País</label>
                        <input type="text" class="form-control" name="pais" id="pais" value="{{$cliente->pais}}">
                    </div>
                </div>
            </div>
            <div class="estilo-espacio">
                <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-refresh"></span>
                    Actualizar </button>
            </div>
            <a class="btn btn-info" type="reset" href="{{url('cliente')}}"><span
                    class="glyphicon glyphicon-home"></span> Regresar
            </a>
        </form>
    </div>
</div>
{!!Form::close()!!}
@endsection