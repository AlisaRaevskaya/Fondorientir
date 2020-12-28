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
           $("span").html('');
        }, 2000);
      }else{
        $("#nameError").text(response.errors.name);
        $("#emailError").text(response.errors.email);
        $("#phoneError").text(response.errors.phone);
        $("#messageError").text(response.errors.message);
        $("#captchaError").text(response.errors.captcha);
      }
    },
});
});
