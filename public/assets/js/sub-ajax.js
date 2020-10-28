
$(".subscription_btn").on("click", function(event){
    event.preventDefault();

    let sub_data= $('.subForm').serialize();

    console.log(sub_data);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $.ajax({
      url: "/subscribe",
      method:"POST",
      dataType: "json",
      data:sub_data,
      success:function(response){
        console.log(response);
        if(response){
          $('.sub_success').html(response.success);
        }
      },
     });
});
