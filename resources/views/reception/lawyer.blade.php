@extends('layout')

@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">

                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="entity_wrapper">
                        {!! $page->content !!}

                        <div class="shadow-textarea">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <div class="row justify-content-center" style="padding:5pt 10pt">
                                    <h1>
                                        <img class="d-flex img-circle avatar z-depth-1-half mr-3"
                                            src="/assets/images/avatar-5.jpg" alt="Avatar">
                                        Задать вопрос юристу бесплатно
                                    </h1>
                                </div>
                           @include('forms.lawyerForm')
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </section>
@endsection
