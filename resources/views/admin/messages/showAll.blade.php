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
                                <ol class="breadcrumb float-sm-right ">
                                    <li class="breadcrumb-item">Все сообщения</a></li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>


                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-11 ml1">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">Сообщения</h3>
                                </div>

                                <div class="table-responsive mailbox-messages">
                                    <table class="table table-hover table-striped table-responsive">
                                        <thead>
                                            <tr>
                                                <th>№</th>
                                                <th>Категория</th>
                                                <th>ФИО</th>
                                                <th>Сообщение</th>
                                                <th>Дата</th>
                                                <th>Статус</th>
                                                <th>Посмотреть</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($messages as $item)
                                                <tr>
                                                    <td class="mailbox-name col-md-1">{{ $item->id }}</td>
                                                    <td class="mailbox-name col-md-2">
                                                        {{ $item->getCategory()->category_name }}
                                                    </td>
                                                    <td class="mailbox-subject col-md-2">{{ $item->name }}
                                                    <td class="mailbox-name col-md-2">
                                                        <a
                                                            href="{{ route('admin.message.show', ['category' => $item->getCategory()->category, 'id' => $item->id]) }}">
                                                            {{ $item->getMiniContent() }}</a>
                                                    </td>

                                                    <td class="mailbox-date col-md-2">{{ $item->created_at }}</td>
                                                    <td class="mailbox-name col-md-1">
                                                        @if ($item->is_read == true)
                                                            <p>Прочитано</p>
                                                        @else
                                                            <p>Не прочитано</p>
                                                        @endif
                                                    </td>

                                                    <td class="col-md-1">
                                                        <a href="{{ route('admin.message.show', ['category' => $item->getCategory()->category, 'id' => $item->id]) }}"
                                                            class="btn btn-primary"><i class="fas fa-eye"></i>
                                                            Посмотреть</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="card-body p-0">
                                    <div class="float-right">
                                        <div class="btn-group">
                                            <nav aria-label="Page navigation" class="pagination_section">
                                                <ul class="pagination">
                                                    <li>{{ $messages->links() }}</li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
@endsection
