@extends('layout')
@section('content')
<div class="content row">
<h1>Статус заявления по входящему номеру</h1>
<label>Поиск по входящему номеру:</label>
<input type="text">
<input type="submit" value="Проверить">
<input type="submit" value="Сброс">

<div class="row justify-content-around">
<div class="col">Вх.№</div>
<div class="col">Вх.дата</div>
<div class="col">Исх.№</div>
<div class="col">Исх.дата</div>
<div class="col">Статус</div>
</div>

    <!-- <div style="width=300pt">
    <table class="container">
    <thead>
        <tr>
        <th ></th>
        <th >	</th>
        <th ></th>
        <th ></th>
        <th></th>
        </tr>
    </thead>
    <tbody>
    <tr>
        <th></th>
        <td></td>
        <td></td>
        <td></td>
    </tbody>
    </table>
    </div> -->
</div>
@endsection
