$("#lawyer-btn-faq").on("click", function(event) {
    event.preventDefault();

    let data = $('form[name="lawyerFormFaq"]').serialize();

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });

    $.ajax({
      url: "/lawyer-form-faq",
      method:"POST",
      data:data,
      success: function (response) {
      if (response.success) {
         $('#law-success-faq').html(response.success);
        setTimeout(() => {
          $('form[name="lawyerFormFaq"]').trigger("reset");
           $('#law-success-faq').html('');
           $(".text-danger").html('');
        }, 2000);
      }else{
        $("#nameErrorLawFaq").text(response.errors.name);
        $("#phoneErrorLawFaq").text(response.errors.phone);
        $("#messageErrorLawFaq").text(response.errors.message);
      }
    },
});
});

