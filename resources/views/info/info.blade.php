@extends('layout', ['seo' => $page->getSeo()])
@section('content')

    <section id="entity_section" class="entity_section m30">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h1 class="text-center usefu_info_title"><strong>Полезная информация</strong></h1>
                    <div class="m30">
                        <ul class="list-group" style="align-items:center;">
                            <li class="list-group-item">
                                <a class="useful_info_item" href="{{ route('info-1') }}">
                                    Миграционная карта
                                </a>
                            </li>

                            <li class="list-group-item">
                                <a class="useful_info_item" href="{{ route('info-2') }}">
                                    Миграционный
                                    учет</a>
                            </li>

                            <li class="list-group-item">
                                <a class="useful_info_item" href="{{ route('info-2-1') }}">Миграционный
                                    учет.Продление</a>
                            </li>

                            <li class="list-group-item">
                                <a class="useful_info_item" href="{{ route('info-2-2') }}">
                                    Снятие с миграционного учета</a>
                            </li>

                            <li class="list-group-item">
                                <a class="useful_info_item" href="{{ route('info-4') }}">Трудовой патент</a>

                            </li>
                            <li class="list-group-item">
                                <a class="useful_info_item" href="{{ route('info-4-1') }}">Трудовой патент. Продление</a>
                            </li>

                            <li class="list-group-item">
                                <a class="useful_info_item" href="{{ route('info-4-2') }}">Тестирование для оформления
                                    патента</a>
                            </li>

                            <li class="list-group-item">
                                <a class="useful_info_item" href="{{ route('info-4-3') }}">Медицинская комиссия для
                                    оформления
                                    патента</a>
                            </li>

                            <li class="list-group-item">
                                <a class="useful_info_item" href="{{ route('info-3') }}">Приглашения для получения визы</a>
                            </li>

                            <li class="list-group-item">
                                <a class="useful_info_item" href="{{ route('info-3-1') }}">Внесение изменения в
                                    приглашение</a>
                            </li>
                            <li class="list-group-item">
                                <a class="useful_info_item" href="{{ route('info-5') }}">Разрешение на работу по визе</a>
                            </li>

                            <li class="list-group-item">
                                <a class="useful_info_item" href="{{ route('info-5-1') }}">Разрешение на работу
                                    высококвалифицированному специалисту
                                    (РНР ВКС)</a>
                            </li>
                            <li class="list-group-item">
                                <a class="useful_info_item" href="{{ route('info-5-2') }}">Вид на жительство для
                                    высококвалифицированного сотрудника (ВКС)</a>
                            </li>
                            <li class="list-group-item">
                                <a class="useful_info_item" href="{{ route('info-7-5') }}">Тестирование для
                                    оформления разрешения на работу</a>
                            </li>
                            <li class="list-group-item">
                                <a class="useful_info_item" href="{{ route('info-5-3') }}"> Медицинская комиссия для
                                    разрешения на работу </a>
                            </li>

                            <li class="list-group-item">
                                <a class="useful_info_item" href="{{ route('info-7') }}">Разрешение на временное
                                    проживание(РВП) в РФ</a>
                            </li>

                            <li class="list-group-item">
                                <a class="useful_info_item" href="{{ route('info-7-6') }}">Медицинская
                                    комиссия для разрешения на работу</a>
                            </li>
                            <li class="list-group-item">
                                <a class="useful_info_item" href="{{ route('info-7-1') }}">
                                    Подтверждение РВП</a>
                            </li>
                            <li class="list-group-item">
                                <a class="useful_info_item" href="{{ route('info-7-2') }}">
                                    Вид на жительство (ВНЖ) в РФ</a>
                            </li>

                            <li class="list-group-item">
                                <a class="useful_info_item" href="{{ route('info-7-3') }}">Подтверждение ВНЖ</a>
                            </li>
                            <li class="list-group-item">
                                <a class="useful_info_item" href="{{ route('info-8-1') }}">Гражданство РФ</a>
                            </li>
                            <li class="list-group-item">
                                <a class="useful_info_item" href="{{ route('info-8') }}">Тестирование по русскому языку для
                                    гражданства</a>
                            </li>

                            <li class="list-group-item">
                                <a class="useful_info_item" href="{{ route('info-8-2') }}">Медицинская комиссия для
                                    оформления РВП,
                                    ВНЖ, Гражданства РФ</a>
                            </li>
                            <li class="list-group-item">
                                <a class="useful_info_item" href="{{ route('info-8-3') }}">Статус носителя русского языка
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a class="useful_info_item" href="{{ route('info-8-4') }}">СНИЛС
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a class="useful_info_item" href="{{ route('info-9-1') }}">ИНН: оформление ИНН иностранному
                                    гражданину
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a class="useful_info_item" href="{{ route('info-9') }}">Полис медицинского страхования для
                                    иностранных граждан (ДМС)
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a class="useful_info_item" href="{{ route('info-9-2') }}">Дактилоскопическая экспертиза;
                                </a>
                            </li>
                            <li class="list-group-item">
                                <a class="useful_info_item" href="{{ route('info-6') }}">Снятие запрета на въезд</a>
                            </li>
                        </ul>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
