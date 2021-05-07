<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Detalles</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <br><br><br>
            <table class="table table-striped">
                <tr>
                    <td class="text-center" colspan="2"><strong>DATOS DE LA COMPAÑIA</strong></td>
                </tr>
                <tr>
                    <td><strong>NOMBRE</strong></td>
                    <td>{{$company->names_companies}}</td>
                </tr>
                <tr>
                    <td><strong>DESCRIPCION</strong></td>
                    <td>{{$company->descriptions_companies}}</td>
                </tr>
                <tr>
                    <td><strong>NIT</strong></td>
                    <td>{{$company->nits_companies}}</td>
                </tr>
                <tr>
                    <td><strong>TELEFONO</strong></td>
                    <td>{{$company->phones_companies}}</td>
                </tr>
            </table>
            <a href="{{url('companies')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>
</div>
</body>
</html>
