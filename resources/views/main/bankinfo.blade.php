@extends('layout',['seo' => $page->getSeo()])
@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div>
                        <ol class="breadcrumb info_breadcrumb">
                            <li class="breadcrumb-item">Фонд</li>
                            <li class="breadcrumb-item active">{{ $page->title }}
                            </li>
                        </ol>
                    </div>
                    {!! $page->content !!}
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
