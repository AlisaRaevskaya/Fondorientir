@extends('layout',['seo' => $page->getSeo()])

@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">

                <div class="col-md-1"></div>

                <div class="col-md-10">
                    <div class="entity_wrapper">

                        <div class="entity_title">
                            <h1>Подача жалобы</h1>
                        </div>
                        <h6>Вы можете подать электронную жалобу на нарушение порядка предоставления любой из услуг,
                            оказываемых нашим Фондом.</h6>

                        @include('forms.claimForm')
                        <!-- chunk form_under_article \\-->
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
    </section>
@endsection
