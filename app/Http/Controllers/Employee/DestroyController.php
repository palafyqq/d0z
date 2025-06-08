<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke(Employee $employee)
    {
        $user = $employee->user;
        $employee->delete();
        $user->delete();

       return redirect()->route('employee.index');
    }
}
