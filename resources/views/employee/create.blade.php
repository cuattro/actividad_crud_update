<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Nuevo empleado</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <br><br>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Formulario registro nueva empleado
                </div>
                <div class="panel-body">
                    <form action="{{url('employees')}}" method="POST">
                        @csrf
                        <div class="form-grup">
                            <label for="">Nombres Empleado</label>
                            <input type="text" class="form-control" name="names_employees" id="names_employees">
                        </div>
                        <div class="form-grup">
                            <label for="">Apellidos Empleado</label>
                            <input type="text" class="form-control" name="lastnames_employees" id="lastnames_employees">
                        </div>
                        <div class="form-grup">
                            <label for="">E-mail Empleado</label>
                            <input type="text" class="form-control" name="emails_employees" id="emails_employees">
                        </div>
                        <div class="form-grup">
                            <label for="">Documento Empleado</label>
                            <input type="text" class="form-control" name="documents_employees" id="documents_employees">
                        </div>
                        <div class="form-grup">
                            <label for="">Genero Empleado</label>
                            <input type="text" class="form-control" name="genders_employees" id="genders_employees">
                        </div>
                        <hr>
                        <button class="btn btn-primary" type="submit">Registrar</button>
                        <a href="{{url('employees')}}" class="btn btn-primary">Cancelar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
