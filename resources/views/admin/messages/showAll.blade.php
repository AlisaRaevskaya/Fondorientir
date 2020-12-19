@extends('admin.layout')
@section('content')

    <div class="content-wrapper" id="layoutSidenav_content" style="margin-top:30pt;">
        <!-- Main content -->
        <section class="content container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Сообщения</h3>
                        </div>
                        <div class="table-responsive mailbox-messages">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th><i class="fa fa-fw fa-sort"></i>№</th>
                                        <th><i class="fa fa-fw fa-sort"></i>Категория</th>
                                        <th>ФИО</th>
                                        <th>Сообщение</th>
                                        <th><i class="fa fa-fw fa-sort"></i>Дата</th>
                                        <th><i class="fa fa-fw fa-sort"></i>Статус</th>
                                        <th>Посмотреть</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($messages as $item)
                                        <tr>
                                            <td class="mailbox-name col-md-1">{{ $item->id }}</td>
                                            <td class="mailbox-category col-md-2">{{ $item->getCategory()->category_name }}
                                            </td>
                                            <td class="mailbox-subject col-md-2"><b>{{ $item->name }}</b>
                                            <td class="mailbox-name col-md-2">
                                                {{ $item->getMiniContent() }}</a>
                                            </td>
                                            </td>
                                            <td class="mailbox-date col-md-2">{{ $item->dateline }}</td>
                                            <td class="mailbox-name col-md-2">
                                                @if ($item->is_read == true)
                                                    <p>Прочитано</p>
                                                @else
                                                    <p>Не прочитано</p>
                                                @endif
                                            </td>
                                            <td class="col-md-1">
                                                <a href="{{ route('admin.notice.show', ['category' => $item->getCategory()->category, 'id' => $item->id]) }}"
                                                    class="btn btn-primary"><i class="fas fa-eye"></i> Посмотреть</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- /.table -->
                        </div>
                        <!-- /.mail-box-messages -->
                    </div>
                    <!-- /.card-body -->
                    <nav aria-label="Page navigation" class="pagination_section">
                        <ul class="pagination">
                            <li>{{ $messages->links() }}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </section>
    </div>
@endsection
