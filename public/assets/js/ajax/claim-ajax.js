$('#btn-claim').on("click",function(){
    // собираем данные с формы
    let user_data= $('form[name="claimForm"]').serialize();
    // отправляем данные

    $.ajax({
        url: "/claim-form", // куда отправляем
        type: "POST", // метод передачи
        data: user_data,
        // после получения ответа сервера
          success: function (response) {
      if (response.success) {
            $('#claim-success').html(response.success); // выводим ответ сервера
            setTimeout(() => {
                $('form[name="claimForm"]').trigger("reset");
        }, 2000);
    }else{
        $("#nameError").text(response.errors.name);
        $("#emailError").text(response.errors.email);
        $("#phoneError").text(response.errors.phone);
        $("#messageError").text(response.errors.message);
      }
    },
    });
});
