@extends('layout',['seo' => $page->getSeo()])
@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">

                <div class="col-md-9">
                    <div class="entity-wrapper">

                        @foreach ($newsby as $item)
                            <div class="entity_title">
                                <h1>{!! $item->title !!}</a></h1>
                            </div>
                            <!-- entity_title -->

                            <div class="entity_meta">
                                {{ $item->dateline }}
                            </div>
                            <!-- entity_meta -->

                            @if (isset($item->image))
                                <div class="entity_thumb">
                                    <img class="img-responsive" src="/assets/images/{{ $item->image }}" alt="feature-top">
                                </div>
                            @endif

                            <div class="entity_content">
                                {!! $item->body !!}
                            </div>

                            <!-- entity_content -->

                            <div class="entity_footer">
                                <div class="entity_tag">
                                    <span class="blank">{{ $category->ru_name }}</span>
                                    <!-- <span class="blank"><a href="#">$subcategory? $subcategory->name: ''</a></span>-->
                                </div>

                            </div>
                            <!-- entity_footer -->

                    </div>
                    <!-- entity_wrapper -->

                    @endforeach


                </div>

                <!--Advertisement-->
            </div>
            <!--Right Section-->

            <!-- row -->
            @include('layouts.sidebar')


        </div>


        </div>
        <!-- container -->

    </section>
    <!-- Entity Section Wrapper -->


@endsection
