@extends('admin.layout')
@section('content')

    <section>
        <div class="container">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">

                        <div class="col-sm-12">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Менеджер пользователей</li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <div class="card card-outline card-info">

                <div class="card-header">
                    <div class="">
                        <h2 class="card-title">
                            Менеджер пользователей</h2>
                    </div>
                </div>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="">

                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Имя</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Роли</th>
                                                <th scope="col">Редактировать</th>
                                                <th scope="col">Удалить</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                                <tr>
                                                    <th scope="row">{{ $user->id }}</th>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>

                                                    <td>{{ implode(
                                                    ',',
                                                    $user->roles()->get()->pluck('name')->toArray(),
                                                ) }}
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('admin.user.edit', $user->id) }}"
                                                               class="btn btn-primary">Редактировать</a>
                                                    </td>
                                                    <td>
                                                        <form action="{{ route('admin.user.destroy', $user) }}"
                                                            method="post" class="text-center">
                                                            @csrf
                                                            {{ method_field('DELETE') }}
                                                            <button type="submit" class="btn btn-warning ">Удалить</button>
                                                        </form>
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
        @endsection
