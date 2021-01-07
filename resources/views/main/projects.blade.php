@extends('layout', ['seo' => $page->getSeo()])
@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div>
                        <ol class="breadcrumb info_breadcrumb">
                            <li class="breadcrumb-item">Фонд</li>
                            <li class="breadcrumb-item active">{{ $page->title }}
                            </li>
                        </ol>
                    </div>
                    <h1 class="text-center">Успешно реализованные проекты:</h1>
                    <table class="table table-bordered table-responsive">

                        <thead>
                            <tr style="color:black;font-weight:bold;">

                                <th scope="col">Период выполнения</th>
                                <th scope="col">Наименование проекта</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                                <tr>
                                    <td>{!! $project->term !!}</td>
                                    <td>{!! $project->name !!}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
