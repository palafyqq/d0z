@extends('main')
@section('app-content')


    <div class="app-content">
        <!--begin::Container-->
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Сотрудники</h3>
                </div>

                <a href="{{ route('employee.create') }}">
                    <Button type="button" class="btn btn-block btn-primary">Добавить</Button>
                </a>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="width: 10px">#</th>
                                <th>Имя</th>
                                <th>Статус</th>
                                <th>Роль</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $employee)
                                <tr>
                                    <td>{{ $employee->id }}</td>
                                    <td><a href="{{ route("employee.show", $employee->id) }}">
                                            {{ $employee->name }}
                                        </a></td>
                                    <td>{{ $employee->status }}</td>
                                    <td>{{ $employee->user->role }}</td>
                                    <form method="post" action="{{ route('employee.destroy', $employee->id) }}">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-block btn-gradient-danger btn-sm">Удалить</button>
                                    </form>
                                </tr>
                            @endforeach
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
        <!--end::Container-->
    </div>
    <!--end::App Content-->
@endsection