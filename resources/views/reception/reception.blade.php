@extends('layout')
@section('content')

    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>

                <div class="col-md-10">
                    <div class="entity_wrapper">

                        {!! $page->content !!}
                        <div style="padding:10pt 0;">Поля отмеченные * обязательны для заполнения</div>

                        @include('forms.feedbackForm')
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </section>
@endsection
