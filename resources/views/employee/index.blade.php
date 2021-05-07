<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Empleados Registradas</title>
</head>
<body>
<h1 class="text-center">LISTADO DE EMPLEADOS REGISTRADOS EN LA BASE DE DATOS</h1>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <br>
            <a href="{{url('employees/create')}}" class="btn btn-success btn-sm">New</a>
            <a href="{{url('companies')}}" class="btn btn-primary btn-sm">Companies</a>
            <br><br>
            @if(session('status-success'))
                <div class="alert alert-success">
                    {{session('status-success')}}
                </div>
            @endif
            @if(session('status-delete'))
                <div class="alert alert-danger">
                    {{session('status-delete')}}
                </div>
            @endif
            @if(session('status-update'))
                <div class="alert alert-warning">
                    {{session('status-update')}}
                </div>
            @endif
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>NOMBRES</th>
                    <th>APELLIDOS</th>
                    <th>EMAIL</th>
                    <th>DOCUMENTO</th>
                    <th>GENERO</th>
                    <th>OPCIONES</th>
                </tr>
                </thead>
                <tbody>
                @foreach($employees as $employee)
                    <tr>
                        <td>
                            {{$employee->id}}
                        </td>
                        <td>
                            {{$employee->names_employees}}
                        </td>
                        <td>
                            {{$employee->lastnames_employees}}
                        </td>
                        <td>
                            {{$employee->emails_employees}}
                        </td>
                        <td>
                            {{$employee->documents_employees}}
                        </td>
                        <td>
                            {{$employee->genders_employees}}
                        </td>
                        <td>
                            <form action="{{(url('employees',$employee->id))}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <a href="{{url('employees',$employee->id)}}" class="btn btn-primary btn-sm">Details</a>
                                <a href="{{url('employees/edit',$employee->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$employees->links()}}
        </div>
    </div>
</div>
</body>
</html>
