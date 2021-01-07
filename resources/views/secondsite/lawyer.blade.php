@extends('secondsite.layout',['seo' => $page->getSeo()])
@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="entity_wrapper">

                        <div class="entity_title">
                            <h1>Правовая приемная</h1>
                        </div>

                        <div class="entity_body" class="f-size-15">
                            {!! $page->content !!}
                        </div>

                        <div class="shadow-textarea">

                            @include('forms.lawyerForm')
                        </div>
                    </div>
                </div>
            </div>
            @include('layouts.sidebar')
        </div>
    </section>
@endsection
