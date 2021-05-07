<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Editar compañia</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <br><br>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Formulario para editar compañia
                </div>
                <div class="panel-body">
                    <form action="{{url('companies',$company->id)}}" method="POST">
                        @csrf
                        @method ('PUT');
                        <div class="form-grup">
                            <label for="">Nombre Compañia</label>
                            <input type="text" class="form-control" name="names_companies" id="names_companies" value="{{$company->names_companies}}">
                        </div>
                        <div class="form-grup">
                            <label for="">Descripcion Compañia</label>
                            <input type="text" class="form-control" name="descriptions_companies" id="descriptions_companies" value="{{$company->descriptions_companies}}">
                        </div>
                        <div class="form-grup">
                            <label for="">NIT Compañia</label>
                            <input type="text" class="form-control" name="nits_companies" id="nits_companies" value="{{$company->nits_companies}}">
                        </div>
                        <div class="form-grup">
                            <label for="">Telefono Compañia</label>
                            <input type="text" class="form-control" name="phones_companies" id="phones_companies" value="{{$company->phones_companies}}">
                        </div>
                        <hr>
                        <button class="btn btn-primary" type="submit">Guardar cambios</button>
                        <a href="{{url('companies')}}" class="btn btn-primary">Descartar</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
