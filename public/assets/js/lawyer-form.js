$(".lawyer-btn").on("click", function(event) {
    event.preventDefault();

    let sub_data = $("#lawyer-form").serialize();


    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });

    $.ajax({
        url: "/lawyer-question",
        method: "POST",
        data: sub_data,
        success: function(response) {
            if (response){
                $("#law_success").html(response.success);
                setTimeout(() => {
                $("#lawyer-form").trigger("reset");
                }, 2000);
              }
        }
    });
});
