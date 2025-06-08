@extends('main')
@section('app-content')
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="card-title">Сотрудник</h3>
                <a href="{{ route('employee.edit', $employee->id) }}">
                    <button type="button" class="btn btn-success">Изменить</button>
                </a>
            </div>

            <div class="card-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>ID</td>
                            <td>{{ $employee->id }}</td>
                        </tr>
                        <tr>
                            <td>Имя</td>
                            <td>{{ $employee->name }}</td>
                        </tr>
                        <tr>
                            <td>Статус</td>
                            <td>{{ $employee->status }}</td>
                        </tr>
                        <tr>
                            <td>Роль</td>
                            <td>{{ $employee->user->role }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    <li class="page-item"><a class="page-link" href="#">«</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- /.content -->
@endsection
