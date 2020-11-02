@extends('layout')
@section('content')
    <div class="content">
        <div class="row justify-content-around">
            <div class="col-md-1"></div>
                <div class="col-md-9">
                    <h1>Статус заявления по входящему номеру</h1>
                    <label>Поиск по входящему номеру:</label>
                    <input type="text">
                    <input type="submit" value="Проверить">
                    <input type="submit" value="Сброс">


                    <div class="col">Вх.№</div>
                    <div class="col">Вх.дата</div>
                    <div class="col">Исх.№</div>
                    <div class="col">Исх.дата</div>
                    <div class="col">Статус</div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection
