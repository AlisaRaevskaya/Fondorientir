//feedback-messages


$("#btn-messages").click(function(event){
    event.preventDefault();


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //$("input[name=fatherName]").val()//lastName



   let form_data = $(this).serialize(); // Собираем все данные из формы

    $.ajax({
      url: "/submit",
      method:"POST",
      data:form_data,
      dataType: "json",
      contentType: 'application/json',
      success:function(response){
        console.log(response);
        if(response){
          $('#success').html(response.success);
        }
      },
     });
});

//подписка

$(".subscription_btn").click(function(event){
    event.preventDefault();


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $.ajax({
      url: "/subscribe",
      method:"POST",
      dataType: "json",
      data:{
        email:$("input[name=email]").val(),
      },
      success:function(response){
        console.log(response);
        if(response){
          $('#sub_success').html(response.success);
        }
      },
     });
});

//обратная связь мини окно

$(".btn-web-feedback").click(function(event){
    event.preventDefault();

    let f_data=$(this).serialize();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $.ajax({
      url: "/website-feedback",
      method:"POST",
      data:f_data,
      dataType: "json",
      success:function(response){
        console.log(response);
        if(response){
          $('#w-success').html(response.success);
        }
      },
     });
});



$(".btn-law").click(function(event){
    event.preventDefault();
let l_data = $(this).serialize();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
      url: "/lawyer-question",
      method:"POST",
      dataType: "json",
      data:l_data,
      success:function(response){
        console.log(response);
        if(response){
          $('#law_success').html(response.success);
        }
    },
   });
});

     $(".btn_comment").click(function(event){
        event.preventDefault();

        let com_data= $(this).serialize();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
          url: "/commentForm",
          method:"POST",
          dataType: "json",
          data:com_data,
          success:function(response){
            console.log(response);
            if(response){
              $('#com_success').html(response.success);
            }
        },
       });
  });


