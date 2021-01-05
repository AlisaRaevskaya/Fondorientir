@extends('layout',['seo' => $page->getSeo()])
@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">

                <div class="col-md-9">
                    <div class="entity-wrapper">
                        <div>
                            <ol class="breadcrumb info_breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('news') }}">Новости</a></li>
                                <li class="breadcrumb-item active">Миграционные новости</li>
                            </ol>
                        </div>

                        <div class="entity_title">
                            <h1 class="text-justify">{!! $item->title !!}</h1>
                        </div>
                        <!-- entity_title -->

                        <div class="entity_meta">
                            <p>{{ $item->date_published }}</p>
                        </div>

                        <div class="entity_content text-justify">
                            <!-- entity_meta -->
                            @if (isset($item->image))
                                <div class="entity_thumb"
                                    style="max-width:330px; border-radius:8px;float:left;margin: 5px 10px 5px 0px ">
                                    <img class="img-responsive" src="{{ asset('storage/news/' . $item->image) }}"
                                        alt="{{ $item->image }}">
                                </div>
                            @endif
                            {!! $item->body !!}
                        </div>
                    
                        <div class="m30">
                            <h6><a href="{{ url()->previous() }}" class="btn btn-default btn-sm" style="padding:10px;">
                                    <<< Назад </a>
                            </h6>
                        </div>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
