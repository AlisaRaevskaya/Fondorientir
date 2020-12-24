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
                            <li class="breadcrumb-item active">Медицинская комиссия для оформления РВП, ВНЖ, Гражданства РФ
                            </li>
                        </ol>
                    </div>
                    <div class="info_item">
                        <div class="info_item_title">
                            <h5 class="underline">Медицинская комиссия для оформления РВП, ВНЖ, Гражданства РФ
                            </h5>
                        </div>
                        <div class="info_item_img">

                            <div style="flex">
                                <img src="{{ asset('storage/info/zakl.jpg') }}" alt="zakluchenie"
                                    title="Медицинское заключение">
                                <img src="{{ asset('storage/info/zakl2.jpg') }}" alt="zakluchenie"
                                    title="Медицинское заключение">
                            </div>
                        </div>
                        <div class="info_item_content">
                            <p>Согласно российскому законодательству каждый иностранный гражданин при оформлении:</p>
                            <ul class="ul_padding">
                                <li class="li_padding">разрешения на временное проживание,</li>
                                <li class="li_padding">вида на жительство,</li>
                                <li class="li_padding">гражданства РФ</li>
                            </ul>
                            <h3>обязан предоставить в ФМС документы об отсутствии у него инфекционных заболеваний,
                                ВИЧ-инфекции и
                                заболевания
                                наркоманией.</h3>
                            <p>Данные документы можно получить, пройдя медицинскую комиссию. Обращаем ваше внимание, что
                                сделать
                                это
                                можно
                                только в
                                специализированных медицинских организациях, перечень которых устанавливается правительством
                                РФ
                                в
                                каждом
                                регионе
                                отдельно.</p>
                            <a href="tel:+78126124812"><img src="{{ asset('storage/button3.png') }}"
                                    alt=" consulation-button.jpg" class="green_btn img-responsive"
                                    title="Бесплатная консультация"></a>
                            <p>Со списком медицинский учреждений Санкт-Петербурга и Ленинградской области, в которых можно
                                пройти
                                медицинский
                                осмотр
                                для получения РВП, ВНЖ и гражданства, вы можете ознакомиться<strong><a class="link_color"
                                        href="/storage/info/med-phones.docx"> здесь</strong></a>.
                            </p>
                        </div>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
