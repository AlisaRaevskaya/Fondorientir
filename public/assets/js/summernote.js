

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
        onImageUpload: function (file) {
uploadFile(file[0],this);
        }
    }
});

// Upload file on the server.
function uploadFile(file,editor){

let data = new FormData();
 data.append("image", file);
// // Add all files from form to array.
// for (let i = 0; i < filesForm.length; i++) {
// data.append("files[]", filesForm[i]);
// }
    data.append("_method", "PUT");

    $.ajax({
        url:'/uploadImage/3',
        cache: false,
        contentType: false,
        processData: false,
        data: data,
        type: "post",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content")
        },
          success: function(url) {
            $(editor).summernote('editor.insertImage', url);
        },
        error: function(data) {
            console.log(data);
        }
         });

        }
