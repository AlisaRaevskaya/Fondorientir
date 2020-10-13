

$(".btn-primary").click(function(event){
    event.preventDefault();


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
      url: "/submit",
      method:"POST",
      data:{
        name:$("input[name=name]").val(),
        email:$("input[name=email]").val(),
        categories:$("select[name=categories]").val(),
        date:$("input[name=date]").val(),
        message:$('#text_message').val(),
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

$(".registration_btn").click(function(event){
    event.preventDefault();


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
      url: "/reg",
      method:"POST",
      data:{
        password:$("input[name=password]").val(),
        email:$("input[name=email]").val(),
      },
      success:function(response){
        console.log(response);
        if(response){
          $('#success_reg').html(response.success);
        }
      },
     });
});


$(".login_btn").click(function(event){
    event.preventDefault();


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
      url: "/submit",
      method:"POST",
      data:{
        name:$("input[name=name]").val(),
        email:$("input[name=email]").val(),
        categories:$("select[name=categories]").val(),
        date:$("input[name=date]").val(),
        message:$('#text_message').val(),
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
