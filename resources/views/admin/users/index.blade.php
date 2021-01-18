@extends('admin.layout')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid admin-container" style="margin-top:30px;">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item">Meню</a>
                    <li class="breadcrumb-item active">Менеджер пользователей</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-body">
                        В данном разделе Вы можете редактировать информацию о пользователях.
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Менеджер пользователей

                    </div>

                    <div class="card card-outline card-info">
                        <div class="card-body">
                            <div class="col-md-10">
                                <div>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Имя</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Роли</th>
                                                <th scope="col">Действия</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <th scope="row">{{ $user->id }}</th>
                                                    <td class="col-md-2">{{ $user->name }}</td>
                                                    <td class="col-md-2">{{ $user->email }}</td>

                                                    <td class="col-md-2">{{ implode(
                                                            ',',
                                                            $user->roles()->get()->pluck('name')->toArray(),
                                                        ) }}
                                                    </td>
                                                    <td class="col-md-4">
                                                        <div class="row mlr5">
                                                            <a href="{{ route('admin.user.edit', $user->id) }}"
                                                                class="btn btn-primary pull-left"><i class="fas fa-edit">
                                                                </i> Редактировать</a>

                                                            <form action="{{ route('admin.user.destroy', $user) }}"
                                                                method="post" class="text-center ml5">
                                                                @csrf
                                                                {{ method_field('DELETE') }}
                                                                <button type="submit" class="btn btn-danger pull-right"><i
                                                                        class="fas fa-trash">
                                                                    </i> Удалить</button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
