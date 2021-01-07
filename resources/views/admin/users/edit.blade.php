@extends('admin.layout')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="content-wrapper admin-container mb50">
                <!-- Content Header (Page header) -->
                <section class="content-header pt10">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-12 col-md-11 ml1">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Меню</a></li>
                                    <li class="breadcrumb-item active">Менеджер Пользователей</li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>

                <section class="content">
                    <div class="row">
                        <div class="col-md-11 ml1">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                    <h3 class="card-title">
                                        Редактировать информацию о пользователе
                                    </h3>
                                </div>
                                <div class="container">
                                    <div class="card-body">
                                        <div class="col-md-6 col-form-label text-md-right" style="margin-botom:20px;">
                                            Пользователь:{{ $user->name }}
                                        </div>
                                        <div class="box">
                                            <div class="box-body" style="margin-top:30px">
                                                <div class="col-md-11">
                                                    <form action="{{ route('admin.user.update', $user) }}" method="post">
                                                        @csrf
                                                        {{ method_field('PUT') }}

                                                        <div class="form-group row">
                                                            <label for="email"
                                                                class="col-md-4 col-form-label text-md-right">
                                                                E-Mail</label>

                                                            <div class="col-md-4">
                                                                <input id="email" type="email"
                                                                    class="form-control @error('email') is-invalid @enderror"
                                                                    name="email" value="{{ $user->email }}" required
                                                                    autocomplete="email" autofocus>

                                                                @error('email')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="name" class="col-md-4 col-form-label text-md-right">
                                                                Имя</label>

                                                            <div class="col-md-4">
                                                                <input id="name" type="text"
                                                                    class="form-control @error('name') is-invalid @enderror"
                                                                    name="name" value="{{ $user->name }}" required
                                                                    autofocus>

                                                                @error('email')
                                                                    <span class="invalid-feedback" role="alert">
                                                                        <strong>{{ $message }}</strong>
                                                                    </span>
                                                                @enderror
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="roles"
                                                                class="col-md-4 col-form-label text-md-right">
                                                            </label>
                                                            @foreach ($roles as $role)
                                                                <div class="form-check">
                                                                    <input type="checkbox" name="roles[]" id="check"
                                                                        value="{{ $role->id }}" @if ($user->roles->pluck('id')->contains($role->id))
                                                                    checked
                                                            @endif>

                                                            <label for="check">{{ $role->name }}</label>
                                                        </div>
                                                        @endforeach
                                                        <button class="btn btn-primary m30 ml1" type="submit"><i
                                                                class="fas fa-save"></i>
                                                            Сохранить</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card-footer m30">
                                <a href="{{ url()->previous() }}" class="btn btn-outline-secondary"><i
                                        class="fas fa-caret-left">
                                    </i> Назад</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
@endsection
