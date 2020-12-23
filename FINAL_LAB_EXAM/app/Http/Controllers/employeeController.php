<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;

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
}
