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
                        <!-- /.card-header -->

                        <div class="table-responsive mailbox-messages">
                            <table class="table table-hover table-striped">
                                <thead>
                                    <tr>
                                        <th><i class="fa fa-fw fa-sort"></i>№</th>
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
                                            <td class="mailbox-subject"><b>{{ $item->name }}</b>
                                            <td class="mailbox-name">
                                                <a
                                                    href="{{ route('admin.notice.show', ['category' => $category, 'id' => $item->id]) }}">{{ $item->getMiniContent() }}</a>
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
@endsection
{{-- <script>
    $(function() {
        //Enable check and uncheck all functionality
        $('.checkbox-toggle').click(function() {
            var clicks = $(this).data('clicks')
            if (clicks) {
                //Uncheck all checkboxes
                $('.mailbox-messages input[type=\'checkbox\']').prop('checked', false)
                $('.checkbox-toggle .far.fa-check-square').removeClass('fa-check-square').addClass(
                    'fa-square')
            } else {
                //Check all checkboxes
                $('.mailbox-messages input[type=\'checkbox\']').prop('checked', true)
                $('.checkbox-toggle .far.fa-square').removeClass('fa-square').addClass(
                    'fa-check-square')
            }
            $(this).data('clicks', !clicks)
        })

        //Handle starring for font awesome
        $('.mailbox-star').click(function(e) {
            e.preventDefault()
            //detect type
            var $this = $(this).find('a > i')
            var fa = $this.hasClass('fa')

            //Switch states
            if (fa) {
                $this.toggleClass('fa-star')
                $this.toggleClass('fa-star-o')
            }
        })
    })

</script>
--}}
