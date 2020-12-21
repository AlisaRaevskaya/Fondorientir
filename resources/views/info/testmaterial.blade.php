@extends('layout',['seo' => $page->getSeo()])
@section('content')

    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">

                <div class="col-md-9">
                    <h1>Материалы по тестированию</h1>
                    <div class="entity_wrapper">
                        {!! $page->content !!}

                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
