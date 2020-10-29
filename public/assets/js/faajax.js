$("#btn-messages").on("click", function (event) {
  event.preventDefault();

  let checkbox = $("input[type='checkbox']");

  checkbox.is(":checked") ? checkbox.text(1) : checkbox.text(0);
  console.log(checkbox.val());

  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
  });

  let form_data = $('form[name="feedbackForm"]').serialize(); // Собираем все данные из формы

  $.ajax({
    url: "/submit",
    method: "POST",
    data: form_data,
    success: function (response) {
      console.log(response);
      if (response) {
        $("#success").html(response.success);
        $('form[name="feedbackForm"]').reset();
      }
    },
  });
});
