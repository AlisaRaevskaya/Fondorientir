@extends('layout', ['seo' => $page->getSeo()])
@section('content')

    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="entity-wrapper contacts">
                        {!!$page->content!!}
                    </div>
                    <div class="text-center m30">
                        <h4><a href='tel:{{ $contact->changePhoneForHref() }}' class="link_color">{{ $contact->phone }}</a>
                        </h4>
                        <button class="btn btn-sm btn-primary btn_law_popup" data-toggle="modal"
                            data-target="#lawyerQuestion" data-category="Миграционные вопросы">Спросить
                            юриста</button>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
    </section>
@endsection
