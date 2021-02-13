@extends('secondsite.layout',['seo' => $page->getSeo()])

@section('content')

    {{-- {!! $page->content !!} --}}
    <section class="entity_section">
        <div class="container">
            <div class="row">

                <div class="col-md-9 hotline_box">
                    <div>
                        <img src="/storage/app/public/hotline.jpg" alt="hotline.jpg" class="img-responsive">
                    </div>

                    <div class="entity_title m30">
                        <h1 style="font-weight:bold">Онлайн приемная</h1>
                    </div>
                    {!! $page->content !!}
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
