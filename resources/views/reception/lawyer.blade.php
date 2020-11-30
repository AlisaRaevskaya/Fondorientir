@extends('layout')

@section('content')
    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">

                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="entity_wrapper">
                        {!! $page->content !!}

                        <div class="shadow-textarea">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <div class="row" style="padding:5pt 20pt">
                                    <h1>
                                        <img class="d-flex img-circle avatar z-depth-1-half mr-3"
                                            src="/assets/images/avatar-5.jpg" alt="Avatar">
                                        Задать вопрос юристу бесплатно
                                    </h1>
                                </div>
                                <form action="{{ route('lawyer.question') }}" method="post" id="lawyer-form">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Контактное лицо">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email" placeholder="Ваш email">
                                    </div>

                                    <div class="form-group shadow-textarea">
                                        <textarea class="form-control rounded-0" id="formControlTextarea" rows="5" cols="5"
                                            placeholder="Задайте свой вопрос" name="message"></textarea>
                                    </div>
                                    <div id="law_success"></div>
                                    <input type="submit" class="form-group btn btn-primary lawyer-btn" value="Отправить">
                                </form>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </section>
@endsection
