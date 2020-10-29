$("#btn_call").on("click", function () {
  // собираем данные с формы
  let user_data = $('form[name="callForm"]').serialize();


  // отправляем данные
  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
  });

  $.ajax({
    url: "/call", // куда отправляем
    type: "post", // метод передачи
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf_token"]').attr("content"),
      _method: "patch",
    }, // тип передачи данных
    data: user_data,
    // после получения ответа сервера
    success: function (response) {
        if (response){
            $(".success_call").html(response.success);
            setTimeout(() => {
              $('form[name="callForm"]').trigger("reset");
              $("#exampleModalLong").addClass('hidden');
            }, 2000);
          }
    },
  });
});
