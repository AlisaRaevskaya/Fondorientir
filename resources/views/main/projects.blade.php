@extends('layout')
@section('content')

{!!$content!!}
<table class="table">
  <thead>
    <tr>
      <th scope="col">Период выполнения	/th>
      <th scope="col">Название проекта</th>
      <th scope="col">Основные результаты (аннотация)</th>
    </tr>
  </thead>
  <tbody>
      @foreach($newProjects as $nproject)
    <tr>
      <th scope="row">{{$nproject->id}}</th>
      <td>{{$nproject->term}}</td>
      <td>{{$nproject->name}}</td>
      <td>{{$nproject->results}}</td>
    </tr>
@endforeach
  </tbody>
</table>




    <h2>Опыт Фонда "ОРИЕНТИР" в реализации социально-значимых проектов<h2>
    </div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">№ п/п</th>
      <th scope="col">№ и дата заключения контракта (договора)</th>
      <th scope="col">Наименование и адрес заказчика</th>
      <th scope="col">Наименование услуг или работ, предмет контракта (договора)</th>
      <th scope="col"> Сроки оказания услуг или выполнения работ</th>
      <th scope="col">Цена контракта (договора),руб.</th>
    </tr>
  </thead>
  <tbody>
      @foreach($projects as $project)
    <tr>
      <th scope="row">{{$project->id}}</th>
      <td>{{$project->contrator}}</td>
      <td>{{$project->contract}}</td>
      <td>{{$project->subject}}</td>
      <td>{{$project->terms}}</td>
      <td>{{$project->price}}</td>
    </tr>
@endforeach
  </tbody>
</table>

</div>
    <!-- entity_content -->


</div>
<!--Right Section-->

<div class="col-md-1"></div>

</div>
<!-- row -->

</div>
<!-- container -->

@endsection
