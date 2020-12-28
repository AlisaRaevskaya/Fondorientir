@extends('secondsite.layout',['seo' => $page->getSeo()])

@section('content')

    <section class="entity_section">
        <div class="container">
            <div class="row">

                <div class="col-md-9">
                    {!! $page->content !!}
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
