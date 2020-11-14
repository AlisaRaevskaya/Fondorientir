@extends('layout')
@section('content')
    <div class="content">
        <div class="row justify-content-around">
            <div class="col-md-1"></div>
                <div class="col-md-9">
                    <h1>Статус заявления по входящему номеру</h1>
                    <label>Поиск по входящему номеру:</label>
                    <form>
                    <input type="text">
                    <input type="submit" value="Проверить">
                    <input type="submit" value="Сброс">
                    </form>

                <div class="card-body m30">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Вх.№</th>
                                    <th>Вх.дата</th>
                                    <th>Исх.№</th>
                                    <th>Исх.дата</th>
                                    <th>Статус</th>
                                </tr>
                            </thead>
                             <tbody>
                             </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection
