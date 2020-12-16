@extends('secondsite.layout',['seo' => $page->getSeo()])

@section('content')

    {{-- {!! $page->content !!} --}}
    <section class="entity_section">
        <div class="container">
            <div class="row">

                <div class="col-md-9 hotline_box">
                    <div>
                        <img src="/assets/images/hotline.jpg" alt="hotline" class="img-responsive">
                    </div>

                    <div class="entity_title m30">
                        <h1 style="font-weight:bold">Онлайн приемная</h1>
                    </div>
                    @include('blocks.hotline')
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
