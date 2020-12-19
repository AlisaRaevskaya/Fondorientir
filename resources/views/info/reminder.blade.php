@extends('layout',['seo' => $page->getSeo()])
@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">

                <div class="col-md-9">
                    <ul class="bs-holder no-style links"
                        style="width: 100%;display: table;border-collapse: separate;border-spacing: 15px 0;">
                        <li class="ico i_nw">
                            <a href="/banners/redirect?bid=10288" target="_blank">ДГСК МВД России</a>
                        </li>
                        <li class="ico i_nw">
                            <a href="/banners/redirect?bid=11" target="_blank">Общественный совет при МВД России</a>
                        </li>
                        <li class="ico i_nw">
                            <a href="/banners/redirect?bid=5419" target="_blank">Сайт ГИБДД</a>
                        </li>
                        <li class="ico i_nw">
                            <a href="/banners/redirect?bid=8287" target="_blank">Сайт Совета ветеранов МВД</a>
                        </li>
                        <li class="ico i_nw">
                            <a href="/banners/redirect?bid=10368" target="_blank">ГУТ МВД России</a>
                        </li>
                        <li class="ico i_nw">
                            <a href="/banners/redirect?bid=5418" target="_blank">Сервер органов государственной власти
                                РФ</a>
                        </li>
                        <li class="ico i_nw">
                            <a href="/banners/redirect?bid=10367" target="_blank">ДТ МВД России</a>
                        </li>
                        <li class="ico i_nw">
                            <a href="/banners/redirect?bid=194" target="_blank">Порталы правовой информации</a>
                        </li>
                    </ul>

                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
