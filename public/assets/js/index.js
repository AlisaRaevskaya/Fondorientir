
$(".pop_map_link").onclick(function(e) {
    e.preventDefault();
    $(".popup_map").removeClass('hidden');
});

$(".close").onclick(function(e){
    e.preventDefault();
     // Обрабатываем клик по заднему фону
    $(".popup_map").addClass('hidden'); // Скрываем затемнённый задний фон и основное всплывающее окно
})


$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })



$("#btn-popup").onclick(function(e) {
    e.preventDefault();
    $("#modalLawyer").removeClass('hidden');
});

