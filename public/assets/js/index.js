
$(".pop_map_link").on("click", function (e) {
    e.preventDefault();
    $(".popup_map").removeClass('hidden');
});

$(".close").on("click", function (e){
    e.preventDefault();
     // Обрабатываем клик по заднему фону
    $(".popup_map").addClass('hidden'); // Скрываем затемнённый задний фон и основное всплывающее окно
})


$('#myModal').on('shown.bs.modal', function () {
    $('#myInput').trigger('focus')
  })


$("#btn_popup").on("click", function(e){
let value = $( e.target ).data("category");
$('#hidden_input').val(value);
});


$(".pop_call_link").on("click", function (e) {
    e.preventDefault();
    $(".popup_call").removeClass('hidden');
})
