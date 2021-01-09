$("#lawyer-btn-sidebar").on("click", function (event) {
  event.preventDefault();
  let form = $('form[name="lawyerFormSidebar"]');
  let data = form.serialize();

  $.ajaxSetup({
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
  });
  $.ajax({
    url: "/lawyer-form-sidebar",
    method: "POST",
    data: data,
    success: function (response) {
      if (response.success) {
        $("#law-success-sidebar").html(response.success);
        setTimeout(() => {
          form.trigger("reset");
          $("#law-success-sidebar").html("");
          $("#hidden_input").val("");
          $(".text-danger").html("");
          $("#lawyerQuestion").modal("hide");
        }, 2000);
      } else {
        $("#nameErrorSidebar").text(response.errors.name);
        $("#phoneErrorSidebar").text(response.errors.phone);
        $("#emailErrorSidebar").text(response.errors.email);
      }
    },
  });
});
