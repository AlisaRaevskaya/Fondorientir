@extends('layout')
@section('content')

    <section id="entity_section" class="entity_section">
        <div class="container">
            <div class="row">

                <div class="col-md-1"></div>

                <div class="col-md-10">

                    <div class="entity-wrapper">
                        @foreach ($contacts as $item)
                            <div class="text-center">
                                <h1>{{ $item->title }}</h1>
                            </div>
                        @endforeach
                        <div>{!! $item->content !!}</div>
                        <div class="container">
                            @foreach ($info as $contact)
                                <h6>{{ $contact->index }}, {{ $contact->city }},{{ $contact->street }}</h6>
                                <h6>{{ $contact->station }}</h6>
                                <h6>{{ $contact->bus }}</h6>
                                <h6>{{ $contact->routes }}</h6>
                                <h6>{{ $contact->metro }}</h6>
                                <h6>{{ $contact->email }}</h6>
                                <h6>{{ $contact->web }}</h6>
                                <h6>{{ $contact->phone }}</h6>
                                <!-- Right Header Section -->
                            @endforeach
                        </div>
                        <div class="container">
                            <div class="row">
                                <div id="map2" style="width: 600px; height: 400px"></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-1"></div>
                </div>
            </div>
    </section>

    <script>
        ymaps.ready(function() {
            var myMap = new ymaps.Map('map2', {
                    center: [59.92345506419597, 30.298018499999987],
                    zoom: 14
                }, {
                    searchControlProvider: 'yandex#search'
                }),

                // Создаём макет содержимого.
                MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                    '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
                ),

                myPlacemark = new ymaps.Placemark(myMap.getCenter(), {
                    hintContent: 'Фонд "Ориентир"',
                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#image',
                    // Своё изображение иконки метки.
                    iconImageHref: 'assets/images/maps.svg',
                    // Размеры метки.
                    iconImageSize: [30, 42],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    iconImageOffset: [-5, -38]
                }),

                myPlacemarkWithContent = new ymaps.Placemark([55.661574, 37.573856], {
                    hintContent: 'Собственный значок метки с контентом',
                    balloonContent: 'А эта — новогодняя',
                    iconContent: '12'
                }, {
                    // Опции.
                    // Необходимо указать данный тип макета.
                    iconLayout: 'default#imageWithContent',
                    // Своё изображение иконки метки.
                    iconImageHref: 'images/ball.png',
                    // Размеры метки.
                    iconImageSize: [48, 48],
                    // Смещение левого верхнего угла иконки относительно
                    // её "ножки" (точки привязки).
                    iconImageOffset: [-24, -24],
                    // Смещение слоя с содержимым относительно слоя с картинкой.
                    iconContentOffset: [15, 15],
                    // Макет содержимого.
                    iconContentLayout: MyIconContentLayout
                });

            myMap.geoObjects
                .add(myPlacemark)
                .add(myPlacemarkWithContent);
        });

    </script>

@endsection
