@extends('layout',['seo' => $page->getSeo()])
@section('content')

    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">

                <div class="col-md-1"></div>

                <div class="col-md-10">
                    <h1>Материалы по тестированию</h1>
                    <div class="entity_wrapper">
                        {!! $page->content !!}
                    </div>
                    <!-- entity_content -->
                </div>
                <!--Right Section-->
                <div class="col-md-1"></div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </section>
@endsection
