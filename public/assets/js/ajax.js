//feedback-messages


$(".btn-messages").click(function(event){
    event.preventDefault();


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //$("input[name=fatherName]").val()//lastName

    let $firstname = $('input[name="firstName"]').val() ;
    let $lastname = $('input[name="lastName"]').val() ;
    let $fathername = $('input[name="fatherName"]').val();

    let $fullname= $lastname + ' ' + $firstname + ' ' + $fathername;


    $.ajax({
      url: "/submit",
      method:"POST",
      data:{
        firstname = $('input[name="firstName"]').val(),
        lastname = $('input[name="lastName"]').val(),
        fathername = $('input[name="fatherName"]').val(),
        email:$("input[name=email]").val(),
        job:$("input[name=job]").val(),
        phone:$("input[name=phone]").val(),
        address:$("input[name=address]").val(),
        message:$('#yourMessage').val(),
        sendbyemail:$("input[name=sendbyemail]").is(":checked") ? 1 : 0,
        publish:$("input[name=publish]").is(":checked") ? 1 : 0,
        // token:$('meta[name="csrf-token"]').attr('content')
      },
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
      data:{
        email:$("input[name=subscribe]").val(),
      },
      success:function(response){
        console.log(response);
        if(response){
          $('#sub_success').html(JSON.parse(response.success));
        }
      },
     });
});

//обратная связь мини окно

$(".btn-web-feedback").click(function(event){
    event.preventDefault();


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $.ajax({
      url: "/website-feedback",
      method:"POST",
      data:{
        name:$("input[name=name]").val(),
        email:$("input[name=email]").val(),
        phone:$("input[name=phone]").val(),
        message:$('textarea[name="message"]').val(),
      },
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


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
      url: "/lawyer-question",
      method:"POST",
      data:{
        name:$("input[name=name]").val(),
        email:$("input[name=email]").val(),
        message:$('#formControlTextarea').val(),
      },
      success:function(response){
        console.log(response);
        if(response){
          $('#law_success').html(response.success);
        }
      },
     });


     $(".btn_comment").click(function(event){
        event.preventDefault();


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
          url: "/commentForm",
          method:"POST",
          data:{
            name:$("input[name=name]").val(),
            email:$("input[name=email]").val(),
            body:$('#inputComment').val(),
          },
          success:function(response){
            console.log(response);
            if(response){
              $('#com_success').html(response.success);
            }
          },
         });


