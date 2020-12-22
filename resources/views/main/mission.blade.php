@extends('layout', ['seo' => $page->getSeo()])
@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="entity_wrapper">
                        <div class="text-center">
                            <img src="{{ asset('storage/putin.jpg') }}" alt="putin.jpeg">
                        </div>
                        {!! $page->content !!}
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
