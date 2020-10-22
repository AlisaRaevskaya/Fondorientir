$(".btn-web-feedback").on("click", function(event){
    event.preventDefault();

    let f_data=$('form[name="popForm"]').serialize();

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

