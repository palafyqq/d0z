@extends('main')
@section('app-content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Изменить пользователя</h3>
            </div>

            <form method="post" action="{{ route('employee.update', $employee->id) }}">
                @method('patch')
                @csrf

                <div class="card-body">
                    <div class="form-group">
                        <label for="login">Login</label>
                        <input type="text" name="login" class="form-control" id="login" placeholder="Введите логин" value="{{ old('login', $employee->login) }}">
                    </div>

                    <div class="form-group">
                        <label for="password">Пароль</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Пароль">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Подтвердите пароль</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Подтвердите пароль">
                    </div>

                    <div class="form-group">
                        <label for="name">Имя</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Введите имя" value="{{ old('name', $employee->name) }}">
                    </div>

                    <div class="form-group">
                        <label for="status">Статус</label>
                        <input type="text" name="status" class="form-control" id="status" placeholder="Введите статус" value="{{ old('status', $employee->status) }}">
                    </div>

                    <div class="form-group">
                        <label for="role">Роль</label>
                        <input type="text" name="role" class="form-control" id="role" placeholder="Введите роль" value="{{ old('role', $employee->user->role ?? '') }}">
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Изменить</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection
@extends('main')
@section('content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Изменить пользователя</h3>
            </div>

            <form method="post" action="{{ route('employee.update', $employee->id) }}">
                @method('patch')
                @csrf

                <div class="card-body">
                    <div class="form-group">
                        <label for="login">Login</label>
                        <input type="text" name="login" class="form-control" id="login" placeholder="Введите логин" value="{{ old('login', $employee->login) }}">
                    </div>

                    <div class="form-group">
                        <label for="password">Пароль</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Пароль">
                    </div>

                    <div class="form-group">
                        <label for="password_confirmation">Подтвердите пароль</label>
                        <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Подтвердите пароль">
                    </div>

                    <div class="form-group">
                        <label for="name">Имя</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Введите имя" value="{{ old('name', $employee->name) }}">
                    </div>

                    <div class="form-group">
                        <label for="status">Статус</label>
                        <input type="text" name="status" class="form-control" id="status" placeholder="Введите статус" value="{{ old('status', $employee->status) }}">
                    </div>

                    <div class="form-group">
                        <label for="role">Роль</label>
                        <input type="text" name="role" class="form-control" id="role" placeholder="Введите роль" value="{{ old('role', $employee->user->role ?? '') }}">
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Изменить</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection
