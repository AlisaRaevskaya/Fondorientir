@extends('layout')

@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">

                @foreach ($page as $item)
                    <div>
                        <img src="/assets/images/hotline.jpg" alt="hotline">
                    </div>

                    <div class="col-md-1"></div>

                    <div class="col-md-10 container m30">

                        <div class="entity_title m30">
                        <h1>{!! $item->title !!}</h1>
                    </div>

                        <div class="entity_wrapper">
                            <h5>
                            Для приема устных обращений иностранных граждан и лиц без гражданства работает телефон
                                "горячей линии":</h5>
                                <div class="row">
                                <div class="col-md-1">
                                <img src="/assets/images/phone.png" alt="phone">
                                </div>
                                <div class="col-md-1 text-center"style="padding:1rem;
                                background-color:lightblue; width:30%;margin-left:1rem">
                               <h1 style="font-weight:900; color:#090950;">8(812)385-69-89</h1>
                                </div>
                            </div>
                            </div>

                            <div>
                                {!! $item->content !!} </div>

                        </div>
                @endforeach
            </div>

            <div class="col-md-1"></div>

        </div>
        <!-- row -->

        </div>
        <!-- container -->

    </section>
@endsection
