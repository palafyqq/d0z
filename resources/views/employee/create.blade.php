@extends('main')

@section('app-content')
<!-- Main content -->

<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Добавить пользователя</h3>
    </div>

    <form method="post" action="{{ route('employee.store') }}">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Login</label>
                <input type="text" name="login" class="form-control" id="exampleInputEmail1" placeholder="Введите логин">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Пароль</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Пароль">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword2">Подтвердите пароль</label>
                <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword2" placeholder="Подтвердите пароль">
            </div>

            <div class="form-group">
                <label for="exampleInputName">Имя</label>
                <input type="text" name="name" class="form-control" id="exampleInputName" placeholder="Введите имя">
            </div>

            <div class="form-group">
                <label for="exampleInputStatus">Статус</label>
                <input type="text" name="status" class="form-control" id="exampleInputStatus" placeholder="Введите статус">
            </div>

            <div class="form-group">
                <label for="exampleInputRole">Роль</label>
                <input type="text" name="role" class="form-control" id="exampleInputRole" placeholder="Введите роль">
            </div>
        </div>

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Добавить</button>
        </div>
    </form>
</div>

<!-- /.container-fluid -->
@endsection
