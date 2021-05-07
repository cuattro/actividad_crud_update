<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
        $employees = Employee::orderBy('id','desc')-> paginate(5);
        return view('employee.index',compact('employees'));
    }

    public function create(){
        return view('employee.create');
    }

    public function store(Request $request){
        $employee = Employee::create($request->all());
        return redirect('employees')->with('status-success','Usuario creado exitosamente');
    }

    public function show($id){
        $employee = Employee::find($id);
        return view('employee.show',compact('employee'));
    }

    public function destroy($id){
        $employee = Employee::find($id)->delete();
        return redirect('employees')->with('status-delete','Usuario eliminado exitosamente');
    }

    public function edit($id){
        $employee = Employee::find($id);
        return view('employee.edit',compact('employee'));
    }

    public function update(Request $request, $id){
        $employee = Employee::find($id)->update($request->all());
        return redirect('employees')->with('status-update','Usuario actualizado exitosamente');
    }
}
