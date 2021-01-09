@extends('admin.layout')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid admin-container" style="margin-top:30px;">
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">

                            <div class="col-sm-12 col-md-11" style="margin-left:2rem;">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.messages.show.all') }}">Все
                                            сообщения</a>
                                    </li>
                                    <li class="breadcrumb-item active">Новые
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div><!-- /.container-fluid -->
                </section>
                <!-- Main content -->
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-11 ml1">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h3 class="card-title">Сообщения</h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="table-responsive mailbox-messages">
                                    <table class="table table-hover table-striped">
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
                                                    <td class="mailbox-category col-md-2">
                                                        {{ $item->getCategory()->category_name }}
                                                    </td>
                                                    <td class="mailbox-subject col-md-2"><b>{{ $item->name }}</b>
                                                    <td class="mailbox-name col-md-2">
                                                        <a
                                                            href="{{ route('admin.message.show', ['category' => $item->getCategory()->category, 'id' => $item->id]) }}">
                                                            {{ $item->getMiniContent() }}</a>
                                                    </td>
                                                    </td>
                                                    <td class="mailbox-date col-md-2">{{ $item->created_at }}</td>
                                                    <td class="mailbox-name col-md-2">
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
                            </div>
                            <nav aria-label="Page navigation" class="pagination_section">
                                <ul class="pagination">
                                    <li>{{ $messages->links() }}</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
@endsection
