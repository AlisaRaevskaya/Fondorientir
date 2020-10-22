
$(".subscription_btn").on("click", function(event){
    event.preventDefault();

    let sub= $('form[name="subForm"]').serialize();

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $.ajax({
      url: "/subscribe",
      method:"POST",
      dataType: "json",
      data:sub,
      success:function(response){
        console.log(response);
        if(response){
          $('#sub_success').html(response.success);
        }
      },
     });
});
