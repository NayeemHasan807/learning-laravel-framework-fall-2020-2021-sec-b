<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Job;

class employeeController extends Controller
{
    public function employeehome(){
        if(session('type')=='Employee')
        {
           return view('employee.home');
        }
        else
        {
            return redirect('/login');
        }
    }

    public function employeelist(){
        if(session('type')=='Employee')
        {
            $job = Job::all();
            return view('employee.joblist')->with('jobs', $job);
        }
        else
        {
            return redirect('/login');
        }
    }

    public function create(){
        if(session('type')=='Employee')
        {
             
        }
        else
        {
            return redirect('/login');
        }
    }

    public function store(employeeRequest $req){
        if(session('type')=='Employee')
        {
             
        }
        else
        {
            return redirect('/login');
        }
    }

    public function edit($id){
        if(session('type')=='Employee')
        {
           
        }
        else
        {
            return redirect('/login');
        } 
    }

    public function update($id, employeeRequest $req){
        if(session('type')=='Employee')
        {
            
        }
        else
        {
            return redirect('/login');
        }
    }

    public function delete($id){
        if(session('type')=='Employee')
        {
           
        }
        else
        {
            return redirect('/login');
        } 
    }

    public function destroy($id){
        if(session('type')=='Employee')
        {
            
        }
        else
        {
            return redirect('/login');
        } 
    }
}
