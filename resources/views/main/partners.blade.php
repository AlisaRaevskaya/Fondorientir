@extends('layout', ['seo' => $page->getSeo()])
@section('content')

    <section id="entity_section" class="entity_section">
        <div class="container">
            `<div class="row">
                <div class="col-md-9">

                    <div class="entity-wrapper">
                        <div class="text-center">
                            <h2>
                                ПАРТНЁРЫ ФОНДА "ОРИЕНТИР"</h2>
                            <p> (организации с которыми Фонд "ОРИЕНТИР" имеет соглашение о сотрудничестве,
                                службы и организации, с которыми Фонд работает/сотрудничает/взаимодействует
                                на протяжении долгого времени)</p>
                        </div>

                        <div class="entity_content partners">

                            <div class="m30">
                                <a href="https://www.ranepa.ru/">
                                    <img class="img-responsive" src="{{ asset('storage/partners/ranhais.jpg') }}"
                                        alt="ranhais.png"></a>
                                <p style="padding-top:20px;">Российская академия народного хозяйства и государственной
                                    службы при Президенте
                                    Российской Федерации </p>
                            </div>
                            <div class="">
                                <h6> <a href="https://www.gov.spb.ru">Администрация Санкт‑Петербурга</a></h6>
                                <p>Комитет по межнациональным отношениям и реализации миграционной политики
                                    в Санкт-Петербурге
                                    Комитет по труду и занятости населения Санкт-Петербурга
                                    Архивный комитет Санкт‑Петербурга
                                </p>
                            </div>
                            <div class="">
                                <h6>
                                    <a href="https://lenobl.ru/">Администрация Ленинградской области </a>
                                </h6>
                                <p>Комитет по местному самоуправлению, межнациональным и межконфессиональным отношениям
                                    Ленинградской области
                                    Комитет по труду и занятости населения Ленинградской области
                                    Администрация МО Кингисеппский муниципальный район»
                                </p>
                            </div>
                            <div class="">
                                <h6><a href="https://ombudsmanspb.ru/ ">Уполномоченный по правам человека в
                                        Санкт-Петербурге</a> </h6>

                                <h6><a href="https://78.мвд.рф/ ">Управление по вопросам миграции ГУ МВД России по
                                        г.Санкт-Петербургу и Ленинградской области </a></h6>

                                <p style="font-weight:bold;">
                                    Представительство МВД России в Латвийской Республике (по вопросам миграции)
                                    Представительство МВД России в Киргизской Республике (по вопросам миграции)
                                    (по вопросам миграции)
                                    Представительство МВД России в Республике Молдова (по вопросам миграции)
                                    Представительство МВД России в Республике Таджикистан (по вопросам миграции)
                                    Представительство МВД России в Республике Узбекистан (по вопросам миграции)
                                    Главное управление министерства внутренних дел РФ по г. Санкт-Петербургу и Ленинградской
                                    области управление по вопросам миграции отдел по работе с соотечественниками, беженцами
                                    и вынужденными переселенцами в Санкт-Петербурге
                                </p>
                            </div>

                            <div class="partner_items">
                                <a href="https://spb.ranepa.ru/">
                                    <img class="img-responsive" src="{{ asset('storage/partners/ran.png') }}"
                                        alt="ranhais.jpg"></a>
                                <div class="m30">
                                    <p>СПб ГКУ "Санкт-Петербургский Дом национальностей"</p>
                                    <p>СПб ГАУ "Центр трудовых ресурсов"</p>
                                    <p>ГБУ "Дом Дружбы народов Татарстана"</p>
                                    <p>ГБУ города Москвы Московский дом национальностей</p>
                                    <p>ГКУ ЛО "Дом дружбы Ленинградской области" </p>
                                    <p>Санкт-Петербургское региональное отделение общероссийской общественной
                                        организации
                                        "Союз
                                        пенсионеров России"</p>

                                    <p>Ленинградское Областное Региональное Отделение Союза Пенсионеров России</p>
                                    <p>Фонд социально-экономической стабилизации и развития северо-запада</p>
                                    <p>Региональное Отделение Общественной Организации "Союз пенсионеров Калининградской
                                        области"</p>
                                </div>

                                <div class="partner_blocks">

                                    <div class="partner_block">
                                        <a href="https://archiveslo.ru/">
                                            <img src="{{ asset('storage/partners/archiv.png') }}" class="img-responsive"
                                                alt="ranhais.jpg"></a>
                                        <p>Архивное управление Ленинградской области</p>
                                    </div>
                                    <div class="partner_block">
                                        <a href="https://archive.pskov.ru/ob-upravlenii/gosudarstvennyy/gosudarstvennyy">
                                            <img class="img-responsive" src="{{ asset('storage/partners/archivspb.png') }}"
                                                alt="ranhais.jpg"></a>
                                        <p>Государственный архив Псковской области </p>
                                    </div>
                                    <div class="partner_block">
                                        <a href="https://www.herzen.spb.ru/"><img class="img-responsive"
                                                src="{{ asset('storage/partners/gerzena.png') }}" alt="gerzena.jpg"></a>
                                        <p>Российский государственный педагогический университет им. А. И. Герцена </p>
                                    </div>
                                    <div class="partner_block ">
                                        <a href="https://www.spbgik.ru/"><img class="img-responsive"
                                                src="{{ asset('storage/partners/center_politiki.jpg') }}"
                                                alt="center_politiki.jpg"></a>
                                        <p>Некоммерческое партнерство "Центр социально-консервативной политики</p>
                                    </div>
                                    <div class="partner_block">
                                        <a href="https://www.spbgik.ru/">
                                            <img class="img-responsive" src="{{ asset('storage/partners/spbgik.png') }}"
                                                alt="spbgik.jpg"></a>
                                        <p>Санкт-Петербургский государственный институт культуры</p>
                                    </div>
                                    <div class="partner_block">
                                        <a href="http://cskp.ru/ ">
                                            <img class="img-responsive" src="{{ asset('storage/partners/fond.jpg') }}"
                                                alt="fond.jpg"></a>
                                        <p>Фонд президентских грантов </p>
                                    </div>

                                    <div class="partner_block ">
                                        <a href="https://lengu.ru/">
                                            <img class="img-responsive" src="{{ asset('storage/partners/lengu.png') }}"
                                                alt="lengu.jpg"></a>
                                        <p>Ленинградский государственный университет имени А.С.Пушкина</p>
                                    </div>
                                    <div class="partner_block ">
                                        <a href="https://spb.hse.ru/ "><img class="img-responsive"
                                                src="{{ asset('storage/partners/spbu.png') }}"
                                                alt="rskola_ekonomik.jpg"></a>
                                        <p>Санкт-Петербургский государственный университет</p>
                                    </div>
                                    <div class="partner_block ">
                                        <a href="https://spb.hse.ru/ "><img class="img-responsive"
                                                src="{{ asset('storage/partners/skola_ekonomiki1.png') }}"
                                                alt="rskola_ekonomik.jpg"></a>
                                        <p>Национальный исследовательский университет «Высшая школа экономики»</p>
                                    </div>
                                    <div class="partner_block ">
                                        <a href="https://spbu.ru/">
                                            <img class="img-responsive" src="{{ asset('storage/partners/ranhais.png') }}"
                                                alt="ranhais.jpg"></a>
                                        <p>
                                            Санкт-Петербургский государственный университет
                                        </p>
                                    </div>
                                    <div class="partner_block ">
                                        <a href="https://www.gup.ru/">
                                            <img class="img-responsive" src="{{ asset('storage/partners/gup.png') }}"
                                                alt="gup.jpg"></a>
                                        <p>Санкт-Петербургский Гуманитарный университет профсоюзов</p>
                                    </div>
                                    <div class="partner_block">
                                        <a href="https://www.spbstu.ru/">
                                            <img class="img-responsive" src="{{ asset('storage/partners/politech.jpg') }}"
                                                alt="politech.jpg"></a>
                                        <p>Санкт-Петербургский политехнический университет Петра Великого</p>
                                    </div>
                                    <div class="partner_block">
                                        <a href=""><img class="img-responsive"
                                                src="{{ asset('storage/partners/scenter.jpg') }}" alt="scenter.jpg"></a>
                                        <p>Некоммерческое партнерство "Центр социально-консервативной политики
                                            "Северо-Запад"
                                        </p>
                                    </div>
                                    <div class="partner_block">
                                        <a href="http://spp.spb.ru/">
                                            <img class="img-responsive" src="{{ asset('storage/partners/spp.jpg') }}"
                                                alt="spp.jpg"></a>
                                        <p>Союз промышленников и предпринимателей Санкт-Петербурга
                                        </p>
                                    </div>
                                    <div class="partner_block">
                                        <div class="flex-row">
                                            <img class="img-responsive" src="{{ asset('storage/partners/rspp.png') }}"
                                                alt="rspp.jpg">
                                            <a href="http://len.rspp.ru/">
                                                <img class="img-responsive" src="{{ asset('storage/partners/img2.png') }}"
                                                    alt="ranhais.jpg"></a>
                                        </div>
                                        <p class="text-center">Региональное объединение работодателей
                                            «Союз промышленников <br>и предпринимателей Ленинградской области»
                                        </p>
                                    </div>
                                    <div class="partner_block">
                                        <a href=""><img class="img-responsive"
                                                src="{{ asset('storage/partners/grazdan_dostoinstvo.jpg') }}"
                                                alt="grazdan_dostoinstvo.jpg"></a>
                                        <p>Общероссийское общественное движение «Гражданское достоинство»
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
            <!-- row -->`
        </div>
        <!-- container -->
    </section>
@endsection
