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
{!!Form::open(array('url'=>'cliente','method'=>'POST','autocomplete'=>'off'))!!} {{Form::token()}}
<div class="espacio">
    <div class="distribucion">
        <form>
            <div align="center">
                <h3>
                    <p>Registro de Cliente</p>
                </h3>
            </div>
            <div class="row formtype">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Tipo Cliente</label>
                        <input class="form-control" type="text" name="tipo_Cliente" id="tipo_Cliente">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nombre Empresa</label>
                        <input class="form-control" type="text" name="nombreEmpresa" id="nombreEmpresa">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nit</label>
                        <input class="form-control" type="text" name="nit" id="nit">
                    </div>
                </div>
                <div class="row formtype">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>País Recidencia</label>
                            <input class="form-control" type="text" name="pais" id="pais">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Id Persona</label>
                            <select name="persona_id" id="persona_id" class="form-control selectpicker"
                                data-livesearch="true" required>
                                <option value="" disabled selected>persona:</option>
                                @foreach
                                ($persona as $per)
                                <option value="{{$per->persona_id}}">{{ $per->nombre }}
                                    -{{ $per->a_paterno}}-{{$per->persona_id}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="estilo-espacio">
                    <div class="btn-espacios">
                        </button><button class="btn btn-outline-primary">Guardar<i
                                class="fa-solid fa-floppy-disk"></i><span
                                class="glyphicon glyphicon-ok"></span></button>
                    </div>
                    <div class="btn-espacios">
                        <button type="reset" class="btn btn-outline-danger">Limpiar <i
                                class="fa-solid fa-eraser"></i></button>
                    </div>
                    <div class="btn-espacios">
                        <a class="btn btn-outline-success" href="{{url('cliente')}}"><i
                                class="fa-solid fa-arrow-rotate-left"></i>
                            Regresar</a>
                    </div>
                </div>
            </div>
    </div>
    </form>
</div>
</div>
{!!Form::close()!!}
@endsection