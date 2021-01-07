@extends('layout',['seo' => $page->getSeo()])

@section('content')

    {{-- {!! $page->content !!} --}}
    <section class="entity_section">
        <div class="container">
            <div class="row">

                <div class="col-md-9 hotline_box">

                    <div>
                        <img src="/assets/images/hotline.jpg" alt="hotline" class="img-responsive">
                    </div>
                    <div>
                        <ol class="breadcrumb info_breadcrumb">
                            <li class="breadcrumb-item">Центр поддержки</li>
                            <li class="breadcrumb-item active">{{ $page->title }}
                            </li>
                        </ol>
                    </div>
                    <div class="entity_title m30">
                        <h1 style="font-weight:bold" class="text-center">Горячая линия</h1>
                    </div>
                    <div class="entity_wrapper">
                        {!! $page->content !!}
                    </div>

                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
