
$("#btn_comment").on("click", function(event){
    event.preventDefault();

    let com_data= $('form[name="comForm"]').serialize();

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
