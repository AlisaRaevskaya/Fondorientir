@extends('layout')
@section('content')

<section id="entity_section" class="entity_section">
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="entity_wrapper">
    <div class="entity_title">
<h1>Время работы специалистов по миграционным и трудовым вопросам:<h1>
<table class="table">
<tbody>
    <tr>
    <th scope="row">Юрист по миграционному и гражданскому законодательству<th>
    <td>среда- пятница </td>
    <td><strong>с 12.00 до 18.00<strong></td>
</tr>
<tr>
    <th scope="row">Юрист по трудовому законодательству<th>
    <td>вторник - четверг</td>
    <td><strong>с 12.00 до 18.00<strong></td>
</tr>
</tbody>
</table>

<p>Запись на прием – ежедневно с 09.00 до 19.00 по тел. 8(812)385-69-89.</p>

<h3>Приемная работает ежедневно (кроме субботы и воскресенья)
 с 9.00 до 18.00 часов по адресу:
@include('blocks.address')
</h3>

<p>Схема проезда:</p>
<img src="assets/images/map.jpg">

</div>
    <!-- entity_content -->
</div>
<!--Right Section-->

</div>
<!-- row -->

</div>
<!-- container -->

</section>
@endsection
