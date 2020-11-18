@extends('layout')
@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">

                <div class="col-md-1"></div>

                <div class="col-md-10">
                    <div class="entity_wrapper">
                        @foreach ($content as $item)
                            {!! $item->content !!}
                        @endforeach
                    </div>
                    <div class="">
                              <h2>Наши прошлые проекты</h2>


                <table class="table table-bordered">
                    <thead>
                        <tr style="color:black;font-weight:bold;" >
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
                            <tr style="color:black;" >
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

                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
@endsection
