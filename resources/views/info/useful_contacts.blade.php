@extends('layout',['seo' => $page->getSeo()])
@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div>
                        <ol class="breadcrumb info_breadcrumb">
                            <li class="breadcrumb-item">Инфо-центр</li>
                            <li class="breadcrumb-item active">{{ $page->title }}
                            </li>
                        </ol>
                    </div>
                    <h5>Ссылки на сайты органов государственной власти:</h5>
                    <div class="useful_contacts_links m30">
                        <div class="useful_contacts_links_row text-center">
                            <div class="useful_contacts_links_item ">
                                <a href="https://дгск.мвд.рф/" target="_blank"><img src="/storage/app/public/partners/dgsk.jpg"
                                        alt="dskv" class="img-responsive" title="ДГСК МВД России">ДГСК МВД России</a>
                            </div>
                            <div class="useful_contacts_links_item">
                                <a href="https://ос.мвд.рф/" target="_blank"> <img src="/storage/app/public/partners/mvd.jpg" alt="mvd"
                                        class="img-responsive" title="Общественный совет при МВД России">Общественный совет
                                    при МВД<br> России</a>

                            </div>
                            <div class="useful_contacts_links_item ">
                                <a href="https://гибдд.рф/" target="_blank">
                                    <img src="/storage/app/public/partners/gibdd.png" alt="gibdd.png" class="img-responsive"
                                        title="Сайт ГИБДД">Сайт ГИБДД</a>
                            </div>

                            <div class="useful_contacts_links_item">
                                <a href="https://мвд.рф/" target="_blank"> <img src="/storage/app/public/partners/mvdros.jpg"
                                        alt="mvdrossii.jpg" class="img-responsive" title="Сайт МВД России">Сайт МВД России
                                </a>
                            </div>
                            <div class="useful_contacts_links_item">
                                <a href="https://ветеран.мвд.рф/" target="_blank"><img src="/storage/app/public/partners/mvdros.jpg"
                                        alt="sovet.jpg" class="img-responsive" title="Сайт Совета ветеранов МВД">Сайт
                                    Совета
                                    ветеранов
                                    МВД</a>
                            </div>
                            <div class="useful_contacts_links_item">
                                <a href="https://гут.мвд.рф/" target="_blank">
                                    <img src="/storage/app/public/partners/gutmvd.jpg" alt="gutmvd.jpg" class="img-responsive"
                                        title="ГУТ МВД России">
                                    ГУТ МВД России</a>
                            </div>
                            <div class="useful_contacts_links_item">
                                <a href="http://pravo.gov.ru/"><img src="/storage/app/public/partners/pravovportal.jpg"
                                        alt="pravportal.jpg" class="img-responsive" title="Порталы правовой информации">
                                    Порталы
                                    правовой
                                    информации</a>
                            </div>
                            <div class="useful_contacts_links_item">
                                <a href="http://www.kremlin.ru/" target="_blank"> <img
                                        src="/storage/app/public/partners/president_site.jpg" alt="president-site.jpg"
                                        class="img-responsive" title="Сайт Президента РФ">Сайт Президента РФ
                                </a>
                            </div>
                            <div class="useful_contacts_links_item">
                                <a href="https://www.gosuslugi.ru/" target="_blank"><img
                                        src="/storage/app/public/partners/gosuslugi.jpg" alt="gosuslugi_logo.jpg"
                                        class="img-responsive" title="Сайт Госуслуги">Госуслуги</a>
                            </div>
                        </div>
                    </div>

                    <hr>
                    <div class="useful_contacts_phones text-center">
                        {!! $page->content !!}
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
