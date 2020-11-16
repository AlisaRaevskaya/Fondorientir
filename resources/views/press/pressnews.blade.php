@extends('layout')

@section('content')

    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">
                <div class="col-md-1"></div>

                <div class="col-md-10">

                    <div class="entity_wrapper">

                        <div class="row justify-content-center">
                            <h1 style="text-decoration:underline">{{ $category->ru_name }}</h1>
                        </div>

                        @foreach ($pressnews as $item)

                            <div class="entity_title">
                                <h3><a href="{{ route('news.category.id', [$category->name, $item->id]) }}" target="_self">
                                        {!!$item->title!!}</a>
                                </h3>
                            </div>
                            <!-- entity_title -->

                            {{-- <div class="entity_meta">
                               <h1> {{ $item->dateline }}</h1>
                            </div> --}}
                            <!-- entity_meta -->
                            @if($item->image)
                                <div class="entity_thumb">
                                    <img class="img-responsive" src="{{ asset('storage/news/'.$item->image) }}"  alt="{{$item->image}}">
                                </div>
                                <!-- entity_thumb -->
                            @endif

                            <div class="entity_content">
                                <p>{!! $item->intro !!}</p>
                            </div>

                                <div class="">
                                    <a href="{{ route('news.category.id', [$category->name, $item->id]) }}"
                                        class="btn btn-outline-primary btn-lg active">
                                        Подробнее>>></a>
                                </div>
                                <div class="divider"></div>
                        @endforeach

                    </div>

 <nav aria-label="Page navigation" class="pagination_section">
                            <ul class="pagination">
                                <li>{{ $pressnews->links() }}</li>
                            </ul>
                        </nav>

                    <!-- container -->
                    <!-- entity_section -->
                </div>
                <!-- entity_wrapper -->
<div class="col-md-1"></div>
            </div>
            <!-- col-md-4 -->

        </div>
    </section>

@endsection
