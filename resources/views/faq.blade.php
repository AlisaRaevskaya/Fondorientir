@extends('layout')
@section('content')

    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">

                <div class="col-md-1"></div>

                <div class="col-md-10">
                    <div class="entity-wrapper">

                        <div class="row justify-content-center">
                            <h1 style="text-decoration:underline">Вопрос-ответ</h1>
                        </div>


                        @foreach ($replies as $reply)
                            <div class="entity_title">
                                <h1> <a href="{{ route('faq.id', $reply->id) }}" target="_self"
                                        style="text-decoration:underline">
                                        {!! $reply->title !!}</a></h1>
                            </div>

                            <!-- entity_title -->
                            <div class="entity_content">
                                <p>
                                    {!! $reply->intro !!}</a>
                                </p>
                            </div>

                            <div class="entity_meta">
                                {{ $reply->dateline }}
                            </div>
                            <!-- entity_meta -->


                            <div>
                                <!-- entity_social -->
                                <h3><a href="/faq/{{ $reply->id }}" target="_self"
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

                    <div class="col-md-1"></div>

                </div>
            </div>
        </div>
    </section>
@endsection
