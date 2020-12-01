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
  console.log($(".success_messages"));

  $.ajax({
    url: "/submit",
    method: "POST",
    data: form_data,
    success: function (response) {
      if (response.success) {
        $("#success_messages").html(response.success);
        setTimeout(() => {
          $('form[name="feedbackForm"]').trigger("reset");
        }, 2000);
      }
    },
     error: function(response){
         if(status = 422){
        $('#lastnameError').text(response.responseJSON.errors.lastName);
          $('#emailError').text(response.responseJSON.errors.email);
          $('#jobError').text(response.responseJSON.errors.job);
          $('#phoneError').text(response.responseJSON.errors.phone);
          $('#messageError').text(response.responseJSON.errors.message);
        }}
       });
  });
