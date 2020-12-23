<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Employee;
use App\Http\Requests\employeeRequest;

class adminController extends Controller
{
    public function adminhome(){
        if(session('type')=='Admin')
        {
            return view('admin.home');     
        }
        else
        {
            return redirect('/login');
        }
    } 

    public function employeelist(){
        if(session('type')=='Admin')
        {
            $employee = Employee::all();
            return view('admin.employeelist')->with('employees', $employee);     
        }
        else
        {
            return redirect('/login');
        }
    }

    public function create(){
        
    }

    public function store(employeeRequest $req){
        
    }

    public function edit($id){
        
    }

    public function update($id, employeeRequest $req){
        
    }

    public function show($id){
        
    }

    public function delete($id){
        
    }

    public function destroy($id){
        
    }
}
