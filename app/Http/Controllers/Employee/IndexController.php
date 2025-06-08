<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
       $employees = Employee::all(); 
       return view('employee.index',compact('employees'));
    }
}
