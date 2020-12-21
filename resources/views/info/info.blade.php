@extends('layout', ['seo' => $page->getSeo()])
@section('content')

    <section id="entity_section" class="entity_section m30">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h1>Полезная информация</h1>
                    <div class="flex-row">
                        <div class="info_item">

                            <a href="{{ route('info-1') }}">Миграционная карта (поездки за границу): получение новой
                                миграционной карты
                            </a>
                        </div>
                        <div class="info_item"><a href="">Дактилоскопическая экспертиз</a></div>
                        <div class="info_item"><a href="{{ route('info-2') }}">Миграционный учет</a></div>
                        <div class="info_item"><a href="{{ route('info-3') }}">Миграционный учет: продление.</a></div>
                        <div class="info_item"><a href="{{ route('info-13') }}">Снятие с миграционного учета</a></div>
                        <div class="info_item"><a href="{{ route('info-4') }}">Трудовой патент</a></div>
                        <div class="info_item"><a href="{{ route('info-5') }}">Трудовой патент. Продление</a></div>
                        <div class="info_item"><a href="{{ route('info-6') }}">Тестирование по русскому языку, истории и
                                законодательству РФ для
                                оформления патента</a></div>
                        <div class="info_item"><a href="{{ route('info-7') }}">Медицинская комиссия для оформления патента:
                                прохождение комиссии
                                и
                                получение заключения
                                и сертификата</a></div>

                        <div class="info_item"><a href="{{ route('info-9') }}">Приглашения для получения визы</a></div>
                        <div class="info_item"><a href="{{ route('info-8') }}">Внесение изменения в приглашение</a></div>

                        <div class="info_item"><a href="{{ route('info-10') }}">Разрешение на работу по визе</a></div>
                        <div class="info_item"><a href="">Вид на жительство (ВНЖ) в РФ</a></div>
                        <div class="info_item"><a href="{{ route('info-11') }}">Разрешение на работу
                                высококвалифицированному специалисту (РНР
                                ВКС);</a>
                        </div>
                        <div class="info_item"><a href="">Вид на жительство для высококвалифицированного сотрудника
                                (ВКС)</a></div>
                        <div class="info_item"><a href="">Статус носителя русского языка</a></div>


                        <div class="info_item"><a href=""> Тестирование по русскому языку, истории и законодательству РФ
                                для
                                оформления разрешения на работу</a></div>
                        {{-- info16 --}}

                        <div class="info_item"><a href="">Медицинская комиссия для разрешения на работу: прохождение
                                комиссии и
                                получение
                                заключения и
                                сертификата</a></div>

                        <div class="info_item"><a href="">Разрешение на временное проживание (РВП) в РФ</a></div>


                        <div class="info_item"><a href=""></a>Приглашения для получения визы</div>
                        <div class="info_item"><a href="">Подтверждение РВП</a></div>

                        <div class="info_item"><a href="">Гражданство РФ;</a></div>
                        <div class="info_item"><a href="">Снятие запрета на въезд</a></div>
                        <div class="info_item"><a href="">Тестирование по русскому языку для гражданства</a></div>

                        <div class="info_item"><a href="">ИНН: оформление ИНН иностранному гражданину</a></div>
                        <div class="info_item"><a href="">Полис медицинского страхования для иностранных граждан (ДМС);</a>
                        </div>


                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
