@extends('layout', ['seo' => $page->getSeo()])
@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">

                <div class="col-md-9">
                    <h1>Бланки и образцы</h1>
                    <div class="m30">
                        <a href="{{ asset('/storage/blanks/blank-1') }}"> <img src="/storage/blank.png"
                                alt="blank.png">Уведомление о прибытии иностранного гражданина</a>
                    </div>
                    <div class="m30">
                        <a href="{{ asset('/storage/blanks/blank-2') }}"> <img src="/storage/blank.png"
                                alt="blank.png">Заявление иностранного гражданина или лица без гражданства о регистрации по
                            месту
                            жительства</a>
                    </div>
                    <div class="m30">
                        <a href="{{ asset('/storage/blanks/blank-3') }}"><img src="/storage/blank.png"
                                alt="blank.png">Заявление о выдаче разрешения на временное проживание
                        </a>
                    </div>
                    <div class="m30">
                        <a href="{{ asset('/storage/blanks/blank-4') }}"><img src="/storage/blank.png" alt="blank.png">
                            Форма уведомления о подтверждении проживания иностранного гражданина или
                            лица без гражданства в РФ
                        </a>
                    </div>
                    <div class="m30">
                        <a href="{{ asset('/storage/blanks/blank-5') }}"><img src="/storage/blank.png" alt="blank.png">
                            Заявление о выдаче вида на жительство</a>
                    </div>
                    <div class="m30">
                        <a href="{{ asset('/storage/blanks/blank-6') }}"><img src="/storage/blank.png" alt="blank.png">
                            Форма
                            уведомления о подтверждении проживания иностранного гражданина или
                            лица без гражданства в РФ
                        </a>
                    </div>
                    <div class="m30">
                        <a href="{{ asset('/storage/blanks/blank-7') }}"><img src="/storage/blank.png"
                                alt="blank.png">Заявление о признании носителем языка</a>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
