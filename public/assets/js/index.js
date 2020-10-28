

// $(".popup_link").click(function(e) {
//     e.preventDefault();
//     $(".popup-box").removeClass('hidden');
// });

// $(".close").click(function(e){
//     e.preventDefault();
//      // Обрабатываем клик по заднему фону
//     $(".popup-box").addClass('hidden'); // Скрываем затемнённый задний фон и основное всплывающее окно
// })

$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })


  $(function() {
    // Owl Carousel
    var owl = $(".owl-carousel");
    owl.owlCarousel({
      items: 3,
      margin: 10,
      loop: true,
      nav: true
    });
  });

// $(".popup_link").click(function(e) {
//     e.preventDefault();
//     $(".popup-box").removeClass('hidden');
// });
