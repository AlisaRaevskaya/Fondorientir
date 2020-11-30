@extends('admin.layout')
@section('content')

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
            </div>

            <div class="box-body">
                {{ Form::open(['route' => ['admin.forprojects.store'], 'method' => 'post', 'files' => false])}}
                <div class="col-md-11">
                    <div class="form-group">
                        {{ Form::label('term', 'Сроки оказания услуг или выполнения работ') }}
                        {{ Form::text('term', ['class' => 'form-control required']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::label('name', 'Наименование и адрес заказчика') }}
                        {{ Form::text('name', ['class' => 'form-control required summernote']) }}
                    </div>

                    <div class="form-group">
                        {{ Form::label('results', 'Наименование услуг или работ, предметконтракта(договора)') }}
                        {{ Form::textArea('results', ['class' => 'form-control summernote']) }}
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </section>
@endsection
