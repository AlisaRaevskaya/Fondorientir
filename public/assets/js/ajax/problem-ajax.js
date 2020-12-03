$(".btn-problem").on("click", function (event) {
  event.preventDefault();

  let f_data = $('form[name="problemForm"]').serialize();

  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
  });

  $.ajax({
    url: "/problem-form",
    method: "POST",
    data: f_data,
    success: function (response) {
      if (response) {
        $("#w_success").html(response.success);
        setTimeout(() => {
          $('form[name="problemForm"]').trigger("reset");
        }, 2000);
      } else{
        $("#nameError").text(response.errors.name);
        $("#emailError").text(response.errors.email);
        $("#phoneError").text(response.errors.phone);
        $("#messageError").text(response.errors.message);
      }
    },
  });
});
