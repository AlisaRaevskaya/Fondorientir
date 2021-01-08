@extends('layout', ['seo' => $page->getSeo()])
@section('content')

    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div>
                        <ol class="breadcrumb info_breadcrumb">
                            <li class="breadcrumb-item">Центр поддержки</li>
                            <li class="breadcrumb-item active">{{ $page->title }}
                            </li>
                        </ol>
                    </div>
                    <div class="entity-wrapper">
                        <div class="row justify-contet-center">
                            <h1>Вопросы и ответы</h1>
                        </div>
                        <div class="entity_content">
                            @foreach ($replies as $reply)
                                <div class="entity_title">
                                    <h2> <a href="{{ route('faq.id', $reply->id) }}" target="_self"
                                            style="text-decoration:underline">
                                            {!! $reply->title !!}</a></h2>
                                </div>
                                <!-- entity_title -->
                                <div class="entity_content">
                                    <p>
                                        {!! $reply->intro !!}</a>
                                    </p>
                                </div>
                                <div class="entity_meta">
                                    {{-- {{ $reply->dateline }}
                                    --}}
                                    {{ $reply->date_published }}
                                </div>
                                <!-- entity_meta -->
                                <div>
                                    <!-- entity_social -->
                                    <h3><a href="{{ route('faq.id', $reply->id) }}" target="_self"
                                            class="btn btn-outline-primary btn-lg active" role="button" aria-pressed="true">
                                            Читать ответ</a></h3>
                                </div>
                                <hr>
                                <!-- entity_content -->
                            @endforeach
                        </div>
                        <!-- entity_wrapper -->
                        <nav aria-label="Page navigation" class="pagination_section">
                            <ul class="pagination">
                                <li>{{ $replies->links() }}</li>
                            </ul>
                        </nav>

                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
