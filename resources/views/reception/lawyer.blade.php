@extends('layout',['seo' => $page->getSeo()])
@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div>
                        <ol class="breadcrumb info_breadcrumb">
                            <li class="breadcrumb-item">Центр поддержки</li>
                            <li class="breadcrumb-item active">{{ $page->title }}
                            </li>
                        </ol>
                    </div>
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
