<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado Personas</title> <!-- Theme style -->
    <link rel="stylesheet" href="{{public_path('dist/css/adminlte.min.css')}}">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col"> <img src="{{public_path('img/logo.jpg')}}" alt="" width='60px'> </div>
            <div class="col-md-12 col-xs-12">
                <h4 class="text-center">Institución Universitaria Antonio Jose</h4>
            </div>
            <div class="row">
                <h3 class="text-center">Reporte de Personas</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-xs-12">
                <div class="table-responsive">
                    <table class="table table-striped table-hover">
                        <thead>
                            <th>Id</th>
                            <th>Documento Identidad</th>
                            <th>Nombres Completos</th>
                            <th>Apellidos</th>
                            <th>Correo Electrónico</th>
                            <th>Telefono</th>
                        </thead>
                        <tbody> @foreach($personas as $per) <tr>
                                <td>{{ $per->id }}</td>
                                <td>{{ $per->documento_identidad}}</td>
                                <td>{{ $per->nombre }}</td>
                                <td>{{ $per->apellido}}</td>
                                <td>{{ $per->email }}</td>
                                <td>{{ $per->telefono }}</td>
                            </tr> @endforeach </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>