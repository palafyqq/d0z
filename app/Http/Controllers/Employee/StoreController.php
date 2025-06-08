<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\StoreRequest;
use Illuminate\Http\Request;
use App\models\User;
use App\Models\Employee;
use Illuminate\Support\Facades\Hash;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
       $data = $request->validated();

       $dataUser['login'] = $data['login'];
       $dataUser['password'] = Hash::make($data['password']);
       $dataUser['role'] = $data['role'];   
       
       $user = User::where('login',$dataUser['login'])->first();
       if ($user){
        return $error = 'Пользователь уже существует';
       }
       $user = User::create($dataUser);

       $dataEmployee['name'] = $data['name'];
       $dataEmployee['status'] = $data['status'];
       $dataEmployee['user_id'] = $user-> id;

       Employee::create($dataEmployee);
       return redirect()->route('employee.index');
    }
}
