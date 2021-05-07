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
    <div class="col-md-4 col-md-offset-4">
        <br><br><br>
        <table class="table table-striped">
            <tr>
                <td class="text-center" colspan="2"><strong>DATOS DEL EMPLEADO</strong></td>
            </tr>
               <tr>
                    <td><strong>NOMBRES</strong></td>
                    <td>{{$employee->names_employees}}</td>
                </tr>
                <tr>
                    <td><strong>APELLIDOS</strong></td>
                    <td>{{$employee->lastnames_employees}}</td>
                </tr>
            <tr>
                <td><strong>E-MAIL</strong></td>
                <td>{{$employee->emails_employees}}</td>
            </tr>
                <tr>
                    <td><strong>DOCUMENTO</strong></td>
                    <td>{{$employee->documents_employees}}</td>
                </tr>
                <tr>
                    <td><strong>GENERO</strong></td>
                    <td>{{$employee->genders_employees}}</td>
                </tr>
            </table>
            <a href="{{url('employees')}}" class="btn btn-primary">Volver</a>
        </div>
    </div>
</div>
</body>
</html>
