@extends('layout', ['seo' => $page->getSeo()])
@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div>
                        <ol class="breadcrumb info_breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('useful-info') }}">Полезная
                                    информация</a></li>
                            <li class="breadcrumb-item active">СНИЛС</li>
                        </ol>
                    </div>

                    <div class="info_item">
                        <div class="info_item_title">
                            <h5 class="underline">СНИЛС (страховое пенсионное свидетельство): оформление СНИЛС
                                иностранному
                                гражданину
                            </h5>
                        </div>
                        <div class="info_item_img">
                            <img src="/storage/info/snils.jpg" alt="snils" title="Снилс">
                        </div>
                        <div class="info_item_content">
                            <p><strong>СНИЛС работника</strong> - это страховой номер индивидуального&nbsp;лицевого
                                счета,
                                который
                                указывается в страховом свидетельстве сотрудника.&nbsp;</p>
                            <p>Временно пребывающие на территории России иностранные граждане или лица без
                                гражданства,
                                которые
                                работают по трудовому договору обязаны иметь СНИЛС (ФЗ №167, ст.7, п.1). Для такой
                                категории
                                граждан
                                необходимо будет представлять документы в ПФР, оформлять страховые свидетельства и
                                уплачивать
                                страховые взносы.&nbsp;</p>
                            <h3 class="underline">Список необходимых документов:</h3>
                            <p>Для того, чтобы оформить СНИЛС сотруднику, необходимо предоставить следующие
                                документы:</p>
                            <p>От работодателя:</p>
                            <ul class="ul_padding">
                                <li class="li_padding">Реквизиты компании;</li>
                                <li class="li_padding">Номер свидетельства и постановке на учет в ПФР.</li>
                            </ul>
                            <p>От иностранного гражданина:</p>
                            <ul class="ul_padding">
                                <li class="li_padding">Копия паспорта;</li>
                                <li class="li_padding">Копия миграционной карты;</li>
                                <li class="li_padding">Копия регистрации (уведомление о месте временного
                                    пребывания);</li>
                                <li class="li_padding">Дата приема на работу;</li>
                                <li class="li_padding">Профессия.</li>
                            </ul>
                            <a href="tel:+78126124812"><img src="{{ asset('storage/button3.png') }}"
                                    alt=" consulation-button.jpg" class="green_btn img-responsive"
                                    title="Бесплатная консультация"></a>
                        </div>
                    </div>

                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
