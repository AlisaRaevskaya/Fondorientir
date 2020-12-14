@extends('layout', ['seo' => $page->getSeo()])
@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">

                <div class="col-md-9">

                    <h2 class="text-center">Успешно реализованные проекты:</h2>
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
            <!-- row -->

        </div>
        <!-- container -->
    </section>

@endsection
