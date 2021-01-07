@extends('layout',['seo' => $page->getSeo()])
@section('content')

    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="entity_wrapper">
                        {!! $page->content !!}
                        <div style="margin:7px 0;">Поля отмеченные <span class="color_red">*</span> обязательны для
                            заполнения</div>
                        <div class="text-center">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                @include('forms.feedbackForm')
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
