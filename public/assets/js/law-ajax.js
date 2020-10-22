
$(".btn-law").on("click", function(event){
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
