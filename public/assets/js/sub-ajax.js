
$(".subscription_btn").on("click", function(event) {
    event.preventDefault();

    let sub_data = $(".subForm").serialize();


    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        }
    });

    $.ajax({
        url: "/subscribe",
        method: "POST",
        data: sub_data,
        success: function(response) {
            if (response){
                $(".sub_success").html(response.success);
                setTimeout(() => {
                $(".subForm").trigger("reset");
                }, 2000);
              }
        }
    });
});
