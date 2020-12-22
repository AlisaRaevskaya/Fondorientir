@extends('layout', ['seo' => $page->getSeo()])
@section('content')
    <section id="entity_section" class="entity_section m30">
        <div class="row">
            <div class="col-md-9">
                <h1>Полезная информация</h1>

            </div>
            @include('layouts.sidebar')
        </div>

    </section>
@endsection
