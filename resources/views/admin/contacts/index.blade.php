@extends('admin.layout')
@section('content')

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid" style="margin-top:30px;">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item">Meню</a>
                    <li class="breadcrumb-item active">Информация о компании</li>
                </ol>
                <div class="card mb-4">
                    <div class="card-body">
                        В данном разделе Вы можете редактировать "Информацию о компании".
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-header">
                        <i class="fas fa-table mr-1"></i>
                        Контакты
                    </div>

                    <div class="card card-outline card-info">
                        <div class="card-body">
                            <div class="box-body m30">
                                <div class="col-md-12">
                                    @foreach ($contacts as $contact)
                                        <table class="table table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td scope="col">Название</td>
                                                    <th>
                                                        <p>{{ $contact->name }}</p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td scope="col">Название на английском</td>
                                                    <th>
                                                        <p>{{ $contact->eng_name }}</p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td scope="col">ИНН</td>
                                                    <th>
                                                        <p>{{ $contact->inn }}</p>
                                                    </th>
                                                </tr>

                                                <tr>
                                                    <td scope="col">Адрес</td>
                                                    <th>
                                                        <p>{{ $contact->index }},
                                                            {{ $contact->city }},{{ $contact->street }}
                                                        </p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td scope="col">Остановка</td>
                                                    <th>{{ $contact->station }}</th>
                                                </tr>

                                                <tr>
                                                    <td scope="col">Автобусы</td>
                                                    <th>
                                                        <p>{{ $contact->bus }}</p>
                                                    </th>
                                                </tr>

                                                <tr>
                                                    <td scope="col">Маршрутки</td>
                                                    <th>
                                                        <p>{{ $contact->routes }}</p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td scope="col">Email</td>
                                                    <th>
                                                        <p>{{ $contact->email }}</p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td scope="col">Телефоны</td>
                                                    <th>
                                                        <p>{{ $contact->phone }}</p>
                                                        <p>{{ $contact->phone2 }}</p>
                                                        <p>{{ $contact->phone_rus }}</p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td scope="col">Соц.сети</td>
                                                    <th>
                                                        <div>Фейсбук: {{ $contact->fb_link }}</div>
                                                        <div>Вк: {{ $contact->vk_link }}</div>
                                                        <div>Instagram: {{ $contact->inst_link }}</div>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td scope="col">Метро</td>
                                                    <th>
                                                        <p>{{ $contact->metro }}</p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td scope="col">Сайт</td>
                                                    <th>
                                                        <p>{{ $contact->web }}</p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td scope="col">Часы работы</td>
                                                    <th>
                                                        <p>{{ $contact->hours }}</p>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <td scope="col">Лого</td>
                                                    <th><img src="/storage/{{ $contact->logo }}" alt="Logo">
                                                        <img src="/storage/{{ $contact->logo2 }}" alt="Logo2">
                                                    </th>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="">
                                            <a href="{{ route('admin.company-info.edit', $contact->id) }}"
                                                class="btn btn-primary pull-right"><i class="far fa-edit"></i>
                                                Редактировать</a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
