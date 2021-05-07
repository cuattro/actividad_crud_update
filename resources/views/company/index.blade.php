<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Compañias Registradas</title>
</head>
<body>
<h1 class="text-center">LISTADO DE COMPAÑIAS REGISTRADAS EN LA BASE DE DATOS</h1>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <a href="{{url('companies/create')}}" class="btn btn-success btn-sm">New</a>
            <a href="{{url('employees')}}" class="btn btn-primary btn-sm">Employees</a>
            <br><br>
            @if(session('status-success'))
            <div class="alert alert-success">
                {{session('status-success')}}
            </div>
            @endif
            @if(session('status-update'))
                <div class="alert alert-warning">
                    {{session('status-update')}}
                </div>
            @endif
            @if(session('status-delete'))
                <div class="alert alert-danger">
                    {{session('status-delete')}}
                </div>
            @endif

            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>DESCRIPCION</th>
                    <th>NIT</th>
                    <th>TELEFONO</th>
                    <th>OPCIONES</th>
                </tr>
                </thead>
                <tbody>
                @foreach($companies as $company)
                    <tr>
                        <td>
                            {{$company->id}}
                        </td>
                        <td>
                            {{$company->names_companies}}
                        </td>
                        <td>
                            {{$company->descriptions_companies}}
                        </td>
                        <td>
                            {{$company->nits_companies}}
                        </td>
                        <td>
                            {{$company->phones_companies}}
                        </td>
                        <td>
                            <form action="{{(url('companies',$company->id))}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <a href="{{url('companies',$company->id)}}" class="btn btn-primary btn-sm">Details</a>
                                <a href="{{url('companies/edit',$company->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$companies->links()}}
        </div>
    </div>
</div>
</body>
</html>
