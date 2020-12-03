$("#btn-messages").on("click", function (event) {
  event.preventDefault();

  let checkbox = $("input[type='checkbox']");

  checkbox.is(":checked") ? checkbox.val(1) : checkbox.val(0);

  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
  });

  let form_data = $('form[name="feedbackForm"]').serialize(); // Собираем все данные из формы


  $.ajax({
    url: "/reception-form",
    method: "POST",
    data: form_data,
    success: function (response) {
      if (response.success) {
        $("#success_messages").html(response.success);
        setTimeout(() => {
          $('form[name="feedbackForm"]').trigger("reset");
        }, 2000);
      } else{
        $("#lastNameError").text(response.errors.lastName);
        $("#firstNameError").text(response.errors.firstName);
        $("#fatherNameError").text(response.errors.fatherName);
        $("#emailError").text(response.errors.email);
        $("#jobError").text(response.errors.job);
        $("#phoneError").text(response.errors.phone);
        $("#addressError").text(response.errors.address);
        $("#messageError").text(response.errors.message);
      }
    }
    //  error: function(response){

    // }
  });
});
