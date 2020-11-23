@extends('admin.layout')
@section('content')

    <!-- Main content -->
    <section class="content">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
            </div>

            <div class="box-body">
                {{ Form::open(['route' => ['admin.update', $pages->id], 'method' => 'post', 'files' => true]) }}
                <div class="col-md-10">

                    {{ Form::hidden('pages_id', $pages->id) }}


                    <div class="form-group">
                        {{ Form::label('images', 'Картинка') }}
                        {{ Form::file('images') }}
                        @if (isset($pages->images))
                            <p>
                                <img class="image" src="{{ $articles->getImageMini() }}" alt="{{ $articles->name }}"
                                    title="{{ $articles->name }}" style="width: 200px">
                            </p>
                        @endif
                    </div>

                    <div class="form-group">
                        {{ Form::textArea('results', $project->results, ['class' => 'form-control summernote']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::text('name', $project->term, ['class' => 'form-control required']) }}
                    </div>
                    <div class="form-group">
                        {{ Form::text('name', $project->term, ['class' => 'form-control required']) }}
                    </div>
                    </td>
                    <td>
                        <div class="form-group">
                            {{ Form::text('name', $project->name, ['class' => 'form-control required']) }}
                        </div>

                </div>
            </div>

        </div>
    @endsection
