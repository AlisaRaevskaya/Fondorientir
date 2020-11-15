@extends('layout')

@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">

                <div class="picture_padding">
                    <img src="/assets/images/hotline.jpg" alt="hotline" class="img-responsive">
                </div>

                <div class="col-md-1"></div>

                    <div class="col-md-10 container m30">
                        @foreach ($page as $item)
                        <div class="entity_title m30">
                            <h1>{!! $item->title !!}</h1>
                        </div>

                        <div class="entity_wrapper">
                            <h5>
                                Для приема устных обращений иностранных граждан и лиц без гражданства работает телефон
                                "горячей линии":</h5>
                            <div class="d-flex">
                                <h1 class="phone-text"><img src="/assets/images/phone.png" alt=""><a
                                        href="tel:+78126124812">8(812)385-69-89</a>
                                </h1>
                            </div>

                        </div>

                        <div class="m30">
                            {!! $item->content !!} </div>
                             @endforeach
                    </div>

            </div>

            <div class="col-md-1"></div>

        </div>
        <!-- row -->

        </div>
        <!-- container -->

    </section>
@endsection
