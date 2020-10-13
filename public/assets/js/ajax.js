
//feedback-messages
$(".btn-messages").click(function(event){
    event.preventDefault();


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    //$("input[name=fatherName]").val()//lastName

    let $firstname = $('input[name="firstname"]').val() ;
    let  $lastname = $('input[name="lastname"]').val() ;
    let $fathername = $('input[name="fathername"]').val();
    let $fullname= $firstname + ' ' + $lastname + ' ' + $fathername;



    $.ajax({
      url: "/submit",
      method:"POST",
      data:{
        name:$fullname,
        email:$("input[name=email]").val(),
        job:$("input[name=job]").val(),
        phone:$("input[name=phone]").val(),
        address:$("input[name=address]").val(),
        message:$('#yourMessage').val(),
        sendbyemail:$('#sendbyemail').val(),
        publish:$('#publish').val(),
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
          $('#sub_success').html(response.success);
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
        message:$('#popup_textarea').val(),
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

