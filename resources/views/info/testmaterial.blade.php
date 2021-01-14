@extends('layout',['seo' => $page->getSeo()])
@section('content')

    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">

                <div class="col-md-9">
                    <div>
                        <ol class="breadcrumb info_breadcrumb">
                            <li class="breadcrumb-item">Инфо-центр</li>
                            <li class="breadcrumb-item active">{{ $page->title }}
                            </li>
                        </ol>
                    </div>
                    <h1>Материалы по тестированию</h1>
                    <div class="entity_wrapper">
                        {{-- {!! $page->content !!} --}}
                        <p>Тесты онлайн по русскому языку, истории России и основам законодательства РФ помогут Вам оценить
                            уровень своих знаний и определить,требуется ли Вам дополнительная подготовка или Вы уже готовы
                            для сдачи аттестационного экзамена. </p>
                        <p>Ниже представлены файлы, в которых приведены основные вопросы по законодательству Российской
                            Федерации и Истории, встречающиеся при сдаче теста по русскому языку.</p>
                        <div class="tests">
                            <div class="tests_items">
                                <div class="tests_items_item_1">
                                    <a href="/storage/pdf/test-zakon.pdf" target="_blank">
                                        <img src="/storage/zakon.png" title="Тест по законодательству"
                                            alt="russian-lawtest.png">
                                    </a>
                                    <a href="/storage/pdf/test-zakon.pdf" target="_blank">
                                        <h6>Тест по законодательству</h6>
                                    </a>
                                </div>
                            </div>
                            <div class="ml30 tests_items mb15">
                                <div class="tests_items_item_1 pl-14">
                                    <a href="/storage/pdf/test-history.pdf" target="_blank">
                                        <img src="/storage/history.png" title="Тест по истории"></a>

                                    <a href="/storage/pdf/test-history.pdf" target="_blank">
                                        <h6>Тест по истории России</h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
