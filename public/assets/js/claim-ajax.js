

  $('#btn_call').on("click",function(){
    // собираем данные с формы
    let user_data= $(this).serialize();
    // отправляем данные

    $.ajax({
        url: "/call", // куда отправляем
        type: "post", // метод передачи
        dataType: "json", // тип передачи данных
        data: user_data,
        // после получения ответа сервера
        success: function(data){
            $('.messages').html(data.result); // выводим ответ сервера
        }
    });
});
