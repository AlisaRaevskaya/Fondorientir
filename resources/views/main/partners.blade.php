@extends('layout', ['seo' => $page->getSeo()])
@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div>
                        <ol class="breadcrumb info_breadcrumb">
                            <li class="breadcrumb-item">Фонд</li>
                            <li class="breadcrumb-item active">{{ $page->title }}
                            </li>
                        </ol>
                    </div>
                    <div class="entity-wrapper">
                        <div class="partners_div text-center">
                            <h2>
                                ПАРТНЁРЫ ФОНДА "ОРИЕНТИР"</h2>
                            <p> (организации с которыми Фонд "ОРИЕНТИР" имеет соглашение о сотрудничестве,
                                службы и организации, с которыми Фонд работает/сотрудничает/взаимодействует
                                на протяжении долгого времени)</p>
                        </div>

                        <div class="entity_content partners">
                            <div class="m30 partners_div">
                                <a href="https://www.ranepa.ru/">
                                    <img class="img-responsive partners_div_img"
                                        src="storage/app/public/partners/ranhais.jpg" alt="ranhais.png"></a>
                                <p class="pt20">Российская академия народного хозяйства и государственной
                                    службы при Президенте
                                    Российской Федерации </p>
                            </div>
                            {!! $page->content !!}
                            <div class="partners_div partner_blocks">
                                <div class="partner_block">
                                    <a href="https://archiveslo.ru/">
                                        <img src="storage/app/public/partners/archiv.png"
                                            class="img-responsive partner_block_img" alt="ranhais.jpg"
                                            title="Архивное управление Ленинградской области">></a>
                                    <p>Архивное управление Ленинградской области</p>
                                </div>
                                <div class="partner_block">
                                    <a href="https://archive.pskov.ru/ob-upravlenii/gosudarstvennyy/gosudarstvennyy">
                                        <img class="img-responsive partner_block_img"
                                            src="/storage/app/public/partners/archivspb.png" alt="ranhais.jpg"
                                            title="Государственный архив Псковской области"></a>
                                    <p>Государственный архив Псковской области </p>
                                </div>
                                <div class="partner_block">
                                    <a href="https://www.herzen.spb.ru/"><img class="img-responsive partner_block_img"
                                            src="/storage/app/public/partners/gerzena.png" alt="gerzena.jpg"
                                            title="Российский государственный педагогический университет им. А. И. Герцена"></a>
                                    <p>Российский государственный педагогический университет им. А. И. Герцена</p>
                                </div>
                                <div class="partner_block">
                                    <a href="https://www.spbgik.ru/"><img class="img-responsive partner_block_img"
                                            src="/storage/app/public/partners/center_politiki.jpg" alt="center_politiki.jpg"
                                            title='Некоммерческое партнерство "Центр социально-консервативной политики"'></a>
                                    <p>Некоммерческое партнерство "Центр социально-консервативной политики</p>
                                </div>

                                <div class="partner_block">
                                    <a href="http://cskp.ru/ ">
                                        <img class="img-responsive" src="/storage/app/public/partners/fond.jpg"
                                            title="Фонд президентских грантов" alt="fond.jpg"></a>
                                    <p>Фонд президентских грантов</p>
                                </div>

                                <div class="partner_block">
                                    <a href="https://www.spbgik.ru/">
                                        <img class="img-responsive partner_block_img"
                                            src="/storage/app/public/partners/logo_5.png" alt="spbgik.jpg"
                                            title="Санкт-Петербургский государственный институт культуры"></a>
                                    <p>Санкт-Петербургский государственный институт культуры</p>
                                </div>
                                <div class="partner_block ">
                                    <a href="https://lengu.ru/">
                                        <img class="img-responsive partner_block_img"
                                            src="/storage/app/public/partners/lengu.png" alt="lengu.jpg"
                                            title="Ленинградский государственный университет имени А.С.Пушкина"></a>
                                    <p>Ленинградский государственный университет имени А.С.Пушкина</p>
                                </div>
                                <div class="partner_block ">
                                    <a href="https://spb.hse.ru/ "><img class="img-responsive partner_block_img"
                                            src="/storage/app/public/partners/spbu.png" alt="rskola_ekonomik.jpg"
                                            title="Санкт-Петербургский государственный университет"></a>
                                    <p>Санкт-Петербургский государственный университет</p>
                                </div>
                                <div class="partner_block ">
                                    <a href="https://spb.hse.ru/ "><img class="img-responsive partner_block_img"
                                            src="/storage/app/public/partners/skola_ekonomiki1.png"
                                            title="Национальный исследовательский университет «Высшая школа экономики»"
                                            alt="rskola_ekonomik.jpg"></a>
                                    <p>Национальный исследовательский университет «Высшая школа экономики»</p>
                                </div>
                                <div class="partner_block ">
                                    <a href="https://spbu.ru/">
                                        <img class="img-responsive partner_block_img"
                                            title="Санкт-Петербургский государственный университет"
                                            src="/storage/app/public/partners/ranhais.png" alt="ranhais.jpg"></a>
                                    <p>
                                        Санкт-Петербургский государственный университет
                                    </p>
                                </div>
                                <div class="partner_block ">
                                    <a href="https://www.gup.ru/">
                                        <img class="img-responsive partner_block_img"
                                            src="/storage/app/public/partners/gup.png" alt="gup.jpg"
                                            title="Санкт-Петербургский Гуманитарный университет профсоюзов"></a>
                                    <p>Санкт-Петербургский Гуманитарный университет профсоюзов</p>
                                </div>
                                <div class="partner_block">
                                    <a href="https://www.spbstu.ru/">
                                        <img class="img-responsive partner_block_img"
                                            src="/storage/app/public/partners/politech.jpg" alt="politech.jpg"
                                            title="Санкт-Петербургский политехнический университет Петра Великого"></a>
                                    <p>Санкт-Петербургский политехнический университет Петра Великого</p>
                                </div>
                                <div class="partner_block">
                                    <a href=""><img class="img-responsive partner_block_img"
                                            src="/storage/app/public/partners/scenter.jpg" alt="scenter.jpg" title='Некоммерческое партнерство "Центр социально-консервативной политики
                                                                                "Северо-Запад"'></a>
                                    <p>Некоммерческое партнерство "Центр социально-консервативной политики
                                        "Северо-Запад"
                                    </p>
                                </div>
                                <div class="partner_block">
                                    <a href="http://spp.spb.ru/">
                                        <img class="img-responsive partner_block_img"
                                            src="/storage/app/public/partners/spp.jpg" alt="spp.jpg"
                                            title="Союз промышленников и предпринимателей Санкт-Петербурга"></a>
                                    <p>Союз промышленников и предпринимателей Санкт-Петербурга
                                    </p>
                                </div>
                                <div class="partner_block">
                                    <div class="flex-row">
                                        <img class="img-responsive partner_block_img"
                                            src="/storage/app/public/partners/rspp.png" alt="rspp.jpg">
                                        <a href="http://len.rspp.ru/">
                                            <img class="img-responsive partner_block_img"
                                                src="/storage/app/public/partners/img2.png" alt="rspp.png"
                                                title="Региональное объединение работодателей
                                                                                «Союз промышленников и предпринимателей Ленинградской области»"></a>
                                    </div>
                                    <p class="text-center">Региональное объединение работодателей
                                        «Союз промышленников <br>и предпринимателей Ленинградской области»
                                    </p>
                                </div>
                                <div class="partner_block">
                                    <a href=""><img class="img-responsive partner_block_img"
                                            src="/storage/app/public/partners/grazdan_dostoinstvo.jpg"
                                            alt="grazdan_dostoinstvo.jpg"
                                            title="Общероссийское общественное движение «Гражданское достоинство»"></a>
                                    <p>Общероссийское общественное движение «Гражданское достоинство»
                                    </p>
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
