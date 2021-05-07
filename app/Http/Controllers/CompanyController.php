<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        $companies = Company::orderBy('id','desc')->paginate(5);
        return view('company.index',compact('companies'));
    }

    public function create(){
        return view('company.create');
    }

    public function store(Request $request){
       $company = Company::create($request->all());
       return redirect('companies')->with('status-success','Compañia creada exitosamente');
    }

    public function show($id){
        $company = Company::find($id);
        return view('company.show',compact('company'));
    }

    public function destroy($id){
        $company = Company::find($id)->delete();
        return redirect('companies')->with('status-delete','Compañia eliminado exitosamente');
    }

    public function edit($id){
        $company = Company::find($id);
        return view('company.edit',compact('company'));
    }

    public function update(Request $request, $id){
        $company = Company::find($id)->update($request->all());
        return redirect('companies')->with('status-update','Compañia actualizada exitosamente');
    }
}
