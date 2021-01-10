@extends('layout', ['seo' => $page->getSeo()])
@section('content')

    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div>
                        <ol class="breadcrumb info_breadcrumb">
                            <li class="breadcrumb-item">Фонд</li>
                            </li>
                        </ol>
                    </div>
                    <div class="fond">
                        <div class="fond_title">
                            Здесь вы найдете информацию о Фонде "ОРИЕНТИР".
                        </div>
                        <div class="fond_container m30">
                            <div class="fond_container_items">
                                @foreach ($items as $item)
                                    <div class="fond_container_item">
                                        <a class="btn underline " href="{{ route($item->laravel_name) }}">
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
