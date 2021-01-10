@extends('layout', ['seo' => $page->getSeo()])
@section('content')

    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div>
                        <ol class="breadcrumb info_breadcrumb">
                            <li class="breadcrumb-item">Центр поддержки</li>
                            </li>
                        </ol>
                    </div>
                    <div class="support">
                        {!! $page->content !!}
                        <div class="support_container m30">
                            <div class="support_container_items">
                                @foreach ($items as $item)
                                    <div class="support_container_item">
                                        <a class="btn underline" href="{{ route($item->laravel_name) }}">
                                            <strong>{{ $item->title }}</strong>
                                        </a>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
