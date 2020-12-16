@extends('secondsite.layout',['seo' => $page->getSeo()])
@section('content')

    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="entity_wrapper">
                        {!! $page->content !!}
                        <div style="padding:8pt 0;">Поля отмеченные * обязательны для заполнения</div>
                        @include('forms.feedbackForm')
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>

        </div>
    </section>
@endsection
