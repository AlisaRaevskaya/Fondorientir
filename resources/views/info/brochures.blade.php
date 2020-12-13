@extends('layout', ['seo' => $page->getSeo()])
@section('content')

    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                  {!!$page->content!!}
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
@endsection
