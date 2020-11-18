@extends('layout')
@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">

                <div class="col-md-1"></div>

                <div class="col-md-11">

                    <h2 class="text-center">Опыт Фонда "ОРИЕНТИР" в реализации социально-значимых проектов:</h2>
                    <table class="table table-bordered ">
                        <thead class="thead-light">
                            <tr style="color:black;font-weight:bold;">
                                <th scope="col"># </th>
                                <th scope="col">Период выполнения </th>
                                <th scope="col">Название проекта</th>
                                <th scope="col">Основные результаты (аннотация)</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($newProjects as $nproject)
                                <tr style="color:black;">
                                    <th scope="row">{{ $nproject->id }}</th>
                                    <td>{!! $nproject->term !!}</td>
                                    <td>{!! $nproject->name !!}</td>
                                    <td>{!! $nproject->results !!}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>


            </div>
            <!-- entity_content -->
</div>

        </div>
        <!-- row -->

        </div>
        <!-- container -->
    </section>

@endsection
