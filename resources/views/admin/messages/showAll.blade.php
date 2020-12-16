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
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($messages as $item)
                                        <tr>
                                            {{-- <td>
                                                <div class="icheck-primary">
                                                    <input type="checkbox" value="" id="check1">
                                                    <label for="check1"></label>
                                                </div>
                                            </td> --}}
                                            {{-- <td class="mailbox-star"><a href="#"><i
                                                        class="fas fa-star text-warning"></i></a></td>
                                            --}}
                                            <td class="mailbox-name"><a href="/read">{{ $item->id }}</a></td>
                                            <td class="mailbox-category">{{ $item->getCategory()->category_name }}</td>
                                            <td class="mailbox-subject"><b>{{ $item->name }}</b>
                                            <td class="mailbox-name">
                                                <a
                                                    href="{{ route('admin.notice.show', $item->getCategory()->category, $item->id) }}">{{ $item->getMiniContent() }}</a>
                                            </td>
                                            </td>
                                            <td class="mailbox-date">{{ $item->dateline }}</td>
                                            <td class="mailbox-name">
                                                @if ($item->is_read == true)
                                                    <p>Прочитано</p>
                                                @else
                                                    <p>Не прочитано</p>
                                                @endif
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
