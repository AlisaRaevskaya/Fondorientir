@extends('layout', ['seo' => $page->getSeo()])
@section('content')

    <section id="entity_section" class="entity_section m30">
        <div class="container">
            <div class="row">
                <div class="col-md-9">

                    <h1 class="text-center usefu_info_title"><strong>Полезная информация</strong></h1>
                    <div class="flex-row m30">
                        <div class="useful_info_item"><a href="{{ route('info-2') }}">Миграционный
                                учет</a></div>

                        <div class="useful_info_item"><a href="{{ route('info-3') }}">Приглашения для получения визы</a>
                        </div>
                        <div class="useful_info_item"><a href="{{ route('info-4') }}">Трудовой патент</a></div>


                        <div class="useful_info_item"><a href="{{ route('info-5') }}">Разрешение на работу</a>
                        </div>
                        <div class="useful_info_item"><a href="{{ route('info-7') }}">Разрешение на временное проживание
                                (РВП) в
                                РФ</a></div>
                        <div class="useful_info_item"><a href="{{ route('info-8') }}">Гражданство РФ</a></div>

                        <div class="useful_info_item"><a href="{{ route('info-6') }}">Снятие запрета на въезд</a></div>
                    </div>
                    <div class="m30">
                        {!! $page->content !!}
                    </div>
                </div>
                @include('layouts.sidebar')
            </div>
        </div>
    </section>
@endsection
