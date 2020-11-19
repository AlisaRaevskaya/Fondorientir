@extends('layout')
@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">

                <div class="col-md-1"></div>

                <div class="col-md-10">

                    <h2 class="text-center">Опыт Фонда "ОРИЕНТИР" в реализации социально-значимых проектов:</h2>
                    <table class="table table-bordered table-responsive">

                        <thead>
                            <tr style="color:black;font-weight:bold;">
                                <th scope="col">№ п/п</th>
                                <th scope="col">№ и дата заключения контракта (договора)</th>
                                <th scope="col">Наименование и адрес заказчика</th>
                                <th scope="col">Наименование услуг или работ, предмет контракта (договора)</th>
                                <th scope="col"> Сроки оказания услуг или выполнения работ</th>
                                <th scope="col">Цена контракта (договора),руб.</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projects as $project)
                                <tr style="color:black;">
                                    <th scope="row">{{ $project->id }}</th>
                                    <td>{!! $project->contrator !!}</td>
                                    <td>{!! $project->contract !!}</td>
                                    <td>{!! $project->subject !!}</td>
                                    <td>{!! $project->terms !!}</td>
                                    <td>{!! $project->price !!}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="col-md-1"></div>
                    <!-- entity_content -->
                </div>

            </div>
            <!-- row -->

        </div>
        <!-- container -->
    </section>

@endsection
