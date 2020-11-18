
$(document).ready(function() {

$('.summernote').summernote({
lang:'ru-RU',
height:300,
minHeight:200,
maxHeight:400,
focus:true,
placeholder:'Введите данные',
fontNames:['Arial','Times New Roman','Helvetica'],
disableDragAndDrop:true,
callbacks: {
        onImageUpload: function(image) {
            uploadImage(image[0]);
        }
    }
});

function uploadImage(image) {
    var data = new FormData();
    data.append("image", image);
    data.append("_method", "PUT");

console.log(11);
    $.ajax({
        url: '/admin/history/3',
        cache: false,
        contentType: false,
        processData: false,
        data: data,
        type: "post",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        },
        success: function(url) {
            var image = $('<img>').attr('src', 'http://' + url);
            $('.summernote').summernote("insertNode", image[0]);
        },
        error: function(data) {
            console.log(data);
        }
    });
}
});
