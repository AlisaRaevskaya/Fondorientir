@extends('layout', ['seo' => $page->getSeo()])
@section('content')

    <section id="entity_section" class="entity_section m30">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h1 class="text-center usefu_info_title"><strong>Полезная информация</strong></h1>
                    <div class="m30 ">
                        <div class="flex-row">
                            <div class="col-md-6 col-sm-6 text-center">
                                <div>
                                    <a class="btn btn-sm btn-primary" href="{{ route('info-10') }}">
                                        Пересечение границы Российской Федерации
                                    </a>
                                </div>
                                <div class="useful_info_item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('info-1') }}">
                                        Миграционная карта
                                    </a>
                                </div>

                                <div class="useful_info_item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('info-2') }}">
                                        Миграционный
                                        учет</a>
                                </div>

                                <div class="useful_info_item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('info-2-1') }}">Миграционный
                                        учет. Продление</a>
                                </div>

                                <div class="useful_info_item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('info-2-2') }}">
                                        Снятие с миграционного учета</a>
                                </div>

                                <div class="useful_info_item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('info-4') }}">Трудовой
                                        патент</a>

                                </div>
                                <div class="useful_info_item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('info-4-1') }}">Трудовой
                                        патент. Продление</a>
                                </div>

                                <div class="useful_info_item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('info-4-2') }}">Тестирование для
                                        оформления
                                        патента</a>
                                </div>

                                <div class="useful_info_item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('info-4-3') }}">Медицинская комиссия
                                        для
                                        оформления
                                        патента</a>
                                </div>

                                <div class="useful_info_item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('info-3') }}">Приглашения для
                                        получения визы</a>
                                </div>

                                <div class="useful_info_item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('info-3-1') }}">Внесение
                                        изменения в
                                        приглашение</a>
                                </div>
                                <div class="useful_info_item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('info-5') }}">Разрешение на
                                        работу по визе</a>
                                </div>

                                <div class="useful_info_item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('info-5-1') }}">Разрешение
                                        на работу
                                        высококвалифицированному<br> специалисту
                                        (РНР ВКС)</a>
                                </div>
                                <div class="useful_info_item">
                                    <a class="btn btn-primary btn-sm" href="{{ route('info-5-2') }}">Вид
                                        на жительство для<br>
                                        высококвалифицированного сотрудника
                                        (ВКС)</a>
                                </div>
                                <div class="useful_info_item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('info-7-5') }}">Тестирование
                                        для
                                        оформления разрешения на
                                        работу</a>
                                </div>
                                <div class="useful_info_item">
                                    <a class=" btn btn-sm btn-primary" href="{{ route('info-5-3') }}">
                                        Медицинская комиссия для
                                        разрешения на работу </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 text-center" style="align-items:center;">
                                <div class="useful_info_block_first_item">
                                    <a class="btn btn-sm btn-primary " href="{{ route('info-7') }}">Разрешение
                                        на временное
                                        проживание(РВП) в РФ</a>
                                </div>

                                <div class="useful_info_item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('info-7-6') }}">Медицинская
                                        комиссия для
                                        разрешения на
                                        работу</a>
                                </div>
                                <div class="useful_info_item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('info-7-1') }}">
                                        Подтверждение
                                        РВП</a>
                                </div>
                                <div class="useful_info_item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('info-7-2') }}">
                                        Вид на
                                        жительство
                                        (ВНЖ) в
                                        РФ</a>
                                </div>

                                <div class="useful_info_item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('info-7-3') }}">Подтверждение
                                        ВНЖ</a>
                                </div>
                                <div class="useful_info_item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('info-8-1') }}">Гражданство
                                        РФ</a>
                                </div>
                                <div class="useful_info_item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('info-8') }}">Тестирование
                                        по
                                        русскому
                                        языку
                                        для
                                        гражданства</a>
                                </div>

                                <div class="useful_info_item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('info-8-2') }}">Медицинская
                                        комиссия
                                        для
                                        оформления
                                        РВП,
                                        ВНЖ,<br>
                                        Гражданства
                                        РФ</a>
                                </div>
                                <div class="useful_info_item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('info-8-3') }}">Статус
                                        носителя
                                        русского
                                        языка
                                    </a>
                                </div>
                                <div class="useful_info_item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('info-8-4') }}">СНИЛС
                                    </a>
                                </div>
                                <div class="useful_info_item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('info-9-1') }}">ИНН:
                                        оформление
                                        ИНН
                                        иностранному
                                        гражданину
                                    </a>
                                </div>
                                <div class="useful_info_item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('info-9') }}">Полис
                                        медицинского
                                        страхования
                                        для
                                        иностранных<br>
                                        граждан
                                        (ДМС)
                                    </a>
                                </div>
                                <div class="useful_info_item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('info-9-2') }}">Дактилоскопическая
                                        экспертиза;
                                    </a>
                                </div>
                                <div class="useful_info_item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('info-6') }}">Снятие
                                        запрета
                                        на
                                        въезд</a>
                                </div>
                                <div class="useful_info_item">
                                    <a class="btn btn-sm btn-primary" href="{{ route('info-11') }}">
                                        Государственная
                                        программа
                                        по
                                        оказанию<br>
                                        содействия
                                        добровольному
                                        переселению
                                        в
                                        РФ<br>
                                        соотечественников,
                                        проживающих
                                        за
                                        рубежом</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
