@extends('layout',['seo' => $page->getSeo()])
@section('content')


    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">



                <div class="col-md-9">
                    <div class="entity-wrapper text-center">
                        <div class="">
                            <p>Некоммерческая организация</p>
                            <h3><strong>ФОНД ПОДДЕРЖКИ ДОБРОВОЛЬНОГО ПЕРЕСЕЛЕНИЯ СООТЕЧЕСТВЕННИКОВ "ОРИЕНТИР"</strong></h3>
                        </div>
                        <div class="m30">
                            <p>Фонд "ОРИЕНТИР"</p>
                        </div>
                        <div class="m30">
                            <p> ИНН 7838030503,</p>
                            <p> ОГРН 1117800001912</p>
                            <p> КПП 783801001</p>
                            <p> Юридический и фактический адрес: 190068, г Санкт-Петербург, улица Садовая, 53, ПОМ. 52</p>
                        </div>
                        <div class="m30">
                            <p> Р/счет: 40703810555040001133</p>
                            <p> в ПАО Северо-Западный банк Сбербанка, г. Санкт-Петербург</p>
                            <p> К/счет: 30101810500000000653</p>
                            <p> БИК: 044030653</p>
                        </div>
                        <div class="m30">
                            <p>Телефон: 8 (812) 385 -69-89</p>
                            <p> Электронная почта:<span class="link_color"> info@fondorientir.ru</span></p>
                        </div>
                        <div class="m30">
                            <p> Президент Фонда «ОРИЕНТИР»</p>
                            <p> Седлиньш Эдгарс</p>
                        </div>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
