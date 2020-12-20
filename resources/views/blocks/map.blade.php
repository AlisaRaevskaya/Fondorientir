<div class="popup_map">

    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" id="mapModal"
        aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">


            <div class="modal-content" style="max-width:750px;height:570px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Закрыть">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body" style="padding:0 20px;">
                    <div id="map" style="max-width:750px;height:500px;"></div>
                </div>
            </div>
        </div>

        <script>
            ymaps.ready(function() {
                var myMap = new ymaps.Map('map', {
                        center: [59.92345506419597, 30.298018499999987],
                        zoom: 15
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
                        iconImageHref: '/assets/images/maps.svg',
                        // Размеры метки.
                        iconImageSize: [43, 55],
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
                        iconContentLayout: MyIconContentLayout,
                    });
                myMap.geoObjects
                    .add(myPlacemark)
                    .add(myPlacemarkWithContent);
            });

        </script>
    </div>
