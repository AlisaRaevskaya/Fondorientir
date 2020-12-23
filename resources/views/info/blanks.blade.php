@extends('layout', ['seo' => $page->getSeo()])
@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">

                <div class="col-md-9">
                    <div class="blanks_title">
                        <h1>Бланки и образцы</h1>
                    </div>
                    <div class="blanks_content">

                        <div class="m30 blanks_item">
                            <div class="blanks_item_img">
                                <img src="/storage/blank.png" alt="blank.png" title="Бланк">
                            </div>
                            <div class="blanks_item_link underline">
                                <a href="{{ asset('/storage/blanks/blank-1.xls') }}">
                                    Уведомление о прибытии иностранного гражданина</a>
                            </div>
                        </div>


                        <div class="m30 blanks_item">
                            <div class="blanks_item_img">
                                <img src="/storage/blank.png" alt="blank.png" title="Бланк">
                            </div>
                            <div class="blanks_item_link underline">
                                <a href="{{ asset('/storage/blanks/blank-2.doc') }}">
                                    Заявление иностранного гражданина или лица без
                                    гражданства о регистрации по
                                    месту
                                    жительства</a>
                            </div>
                        </div>


                        <div class="m30 blanks_item">
                            <div class="blanks_item_img">
                                <img src="/storage/blank.png" alt="blank.png" title="Бланк">
                            </div>
                            <div class="blanks_item_link underline">
                                <a href="{{ asset('/storage/blanks/blank-3.doc') }}">Заявление о выдаче разрешения на
                                    временное проживание
                                </a>
                            </div>
                        </div>


                        <div class="m30 blanks_item">
                            <div class="blanks_item_img">
                                <img src="/storage/blank.png" alt="blank.png" title="Бланк">
                            </div>
                            <div class="blanks_item_link underline">
                                <a href="{{ asset('/storage/blanks/blank-4.docx') }}">
                                    Форма уведомления о подтверждении проживания иностранного гражданина или
                                    лица без гражданства в РФ
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="m30 blanks_item">
                        <div class="blanks_item_img">
                            <img src="/storage/blank.png" alt="blank.png" title="Бланк">
                        </div>
                        <div class="blanks_item_link underline">
                            <a href="{{ asset('/storage/blanks/blank-5.doc') }}">
                                Заявление о выдаче вида на жительство</a>
                        </div>
                    </div>

                    <div class="m30 blanks_item">
                        <div class="blanks_item_img">
                            <img src="/storage/blank.png" alt="blank.png" title="Бланк">
                        </div>
                        <div class="blanks_item_link underline">
                            <a href="{{ asset('/storage/blanks/blank-6.rtf') }}">
                                Форма
                                уведомления о подтверждении проживания иностранного гражданина или
                                лица без гражданства в РФ
                            </a>
                        </div>
                    </div>

                    <div class="m30 blanks_item">
                        <div class="blanks_item_img">
                            <img src="/storage/blank.png" alt="blank.png" title="Бланк">
                        </div>
                        <div class="blanks_item_link underline">
                            <a href="{{ asset('/storage/blanks/blank-7.doc') }}">Заявление о признании носителем языка</a>
                        </div>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
