@extends('layout')
@section('content')

<section id="entity_section" class="entity_section">
<div class="container">
<div class="row">
<div class="col-md-8">
<div class="entity_wrapper">

    <div class="entity_title">
    <h1>Время работы специалистов по миграционным и трудовым вопросам:<h1>
    </div>

<table class="table">
<tbody>
    <tr>
    <th scope="row">Юрист по миграционному и гражданскому законодательству<th>
    <td>среда- пятница </td>
    <td><strong>с 12.00 до 18.00<strong></td>
</tr>
<tr>
    <th scope="row">Юрист по трудовому законодательству<th>
    <td>вторник - четверг</td>
    <td><strong>с 12.00 до 18.00<strong></td>
</tr>
</tbody>
</table>

<h5>Запись на прием – ежедневно с 09.00 до 19.00 по тел. 8(812)385-69-89.</h5>

<h3>Приемная работает ежедневно (кроме субботы и воскресенья)
 с 9.00 до 18.00 часов по адресу:
@include('blocks.address')
</h3>


<div class="container">
<div class="row">
    <div class="col-md-6">
    <p>Схема проезда:</p>
    </div>

<div id="map" style="width: 600px; height: 400px"></div>
</div>
</div>



</div>
    <!-- entity_content -->
</div>
<!--Right Section-->

</div>
<!-- row -->

</div>
<!-- container -->

</section>

<script>
ymaps.ready(function () {
    var myMap = new ymaps.Map('map',{
            center: [59.92345506419597,30.298018499999987],
            zoom: 9
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
