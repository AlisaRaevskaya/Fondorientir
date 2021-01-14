$(".btn_law_popup").on("click", function (e) {
  let value = $(e.target).data("category");
  // console.log(value);
  $("#hidden_input").val(value);
});
$(".pop_map_link").on("click", function (e) {
  e.preventDefault();
  $(".popup_map").removeClass("hidden");
});

$(".close").on("click", function (e) {
  e.preventDefault();
  // Обрабатываем клик по заднему фону
  $(".popup_map").addClass("hidden"); // Скрываем затемнённый задний фон и основное всплывающее окно
});

$("#myModal").on("shown.bs.modal", function () {
  $("#myInput").trigger("focus");
});

$(".pop_call_link").on("click", function (e) {
  e.preventDefault();
  $(".popup_call").removeClass("hidden");
});

if ($(window).width() <= 480) {
  $("#job_label").html("");
  $(".job_div").addClass("");
  $("#job").addClass("m15");
  $("#job_label").html("Место работы/учебы");
  $("#email_label").html("");
  $("#email_label").html("Email");
  $("#phone_label").html("");
  $("#phone_label").html("Телефон");
}
