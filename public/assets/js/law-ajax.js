
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
      data:l_data,
      success: function (response) {
      if (response.success) {
         $('#law_success').html(response.success);
        setTimeout(() => {
          $('form[name="lawyer-form"]').trigger("reset");
        }, 2000);
      }else{
        $("#nameError").text(response.errors.name);
        $("#emailError").text(response.errors.email);
        $("#phoneError").text(response.errors.phone);
        $("#messageError").text(response.errors.message);
      }
    },
   });
});
