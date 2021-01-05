$("#lawyer-btn").on("click", function(event) {
    event.preventDefault();

    let data = $('form[name="lawyerForm"]').serialize();


    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });

    $.ajax({
      url: "/lawyer-form",
      method:"POST",
      data:data,
      success: function (response) {
      if (response.success) {
         $('#law-success').html(response.success);
        setTimeout(() => {
          $('form[name="lawyerForm"]').trigger("reset");
           $('#law-success').html('');
           $(".text-danger").html('');
        }, 2000);
      }else{
        $('#reload').trigger("click");
        $("#nameErrorLaw").text(response.errors.name);
        $("#phoneErrorLaw").text(response.errors.phone);
        $("#messageErrorLaw").text(response.errors.message);
        $("#captchaErrorLaw").text(response.errors.captcha);
      }
    },
});
});
