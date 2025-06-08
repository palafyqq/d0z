<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use app\Http\Requests\Employee\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Employee $employee)
    {
       $data = $request->validated();

       
       $dataUser['login'] = $data['login'];
       $dataUser['role'] = $data['role'];   
       
       $dataEmployee['name'] = $data['name'];
       $dataEmployee['status'] = $data['status'];

       $employee->user->update($dataUser);
       $employee->update($dataEmployee);

       return redirect()-route('employee.show',$employee->id);

    }
}
