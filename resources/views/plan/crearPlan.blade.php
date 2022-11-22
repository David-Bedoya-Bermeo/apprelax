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
{!!Form::open(array('url'=>'Plan','method'=>'POST','autocomplete'=>'off'))!!} {{Form::token()}}
<div class="espacio">
    <div class="distribucion">
        <form>
            <div align="center">
                <h3>
                    <p>Registro de Plan</p>
                </h3>
            </div>

            <div class="row formtype">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nombre</label>
                        <input class="form-control" type="text" name="apaterno" id="apaterno" placeholder="">
                    </div>
                </div>
            </div>
            <div class="row formtype">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Decripcion</label>
                        <input class="form-control" type="text" name="amaterno" id="amaterno" placeholder="">
                    </div>
                </div>


                <div class="estilo-espacio">
                    <a href=""><button class="btn btn-primary">Guardar</button></a>
                    <a href=""> <button type="reset" class="btn btn-danger">Borrar</button> </a>
                </div>
                <a class="btn btn-info" type="reset" href="{{url('plan')}}"><span
                        class="glyphicon glyphicon-home"></span> Regresar
                </a>
        </form>
    </div>
</div>
@endsection