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
                                    <li class="breadcrumb-item">
                                        Cообщения</a>
                                    </li>
                                    <li class="breadcrumb-item active">Из Категории: {{ $categoryName }}
                                    </li>
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
                                <!-- /.card-header -->

                                <div class="table-responsive mailbox-messages col-md-12">
                                    <table class="table table-hover table-striped table-responsive">
                                        <thead>
                                            <tr>
                                                <th>№</th>
                                                <th class="col-md-2">Категория</th>
                                                <th class="col-md-2">ФИО</th>
                                                <th class="col-md-2">Сообщение</th>
                                                <th class="col-md-2">Дата</th>
                                                <th class="col-md-2">Статус</th>
                                                <th class="col-md-2">Посмотреть</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($messages as $item)
                                                <tr>
                                                    <td class="mailbox-name">{{ $item->id }}</td>
                                                    @if (isset($item->category))
                                                        <td class="col-md-2">{{ $item->category }}</td>
                                                    @else
                                                        <td class="col-md-2">{{ $item->getCategory()->category_name }}</td>
                                                    @endif
                                                    <td class="mailbox-subject col-md-2">{{ $item->name }}</td>
                                                    <td class="mailbox-name col-md-2">
                                                        <a
                                                            href="{{ route('admin.message.show', ['category' => $item->getCategory()->category, 'id' => $item->id]) }}">
                                                            {{ $item->getMiniContent() }}</a>

                                                    </td>
                                                    <td class="mailbox-date col-md-2">{{ $item->created_at }}</td>
                                                    <td class="mailbox-name col-md-2">
                                                        @if ($item->is_read == true)
                                                            <p>Прочитано</p>
                                                        @else
                                                            <p>Не прочитано</p>
                                                        @endif
                                                    </td>
                                                    <td class="col-md-2">
                                                        <a href="{{ route('admin.message.show', ['category' => $item->getCategory()->category, 'id' => $item->id]) }}"
                                                            class="btn btn-primary"><i class="fas fa-eye"></i>
                                                            Посмотреть</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <a href="{{ route('admin.messages.show.all') }}"
                                        class="btn btn-outline-primary float-right">Все
                                        сообщения</a>
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
