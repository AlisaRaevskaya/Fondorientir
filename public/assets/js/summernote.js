$(".summernote").summernote({
  lang: "ru-RU",
  height: 300,
  minHeight: 200,
  maxHeight: 400,
  focus: true,
  placeholder: "Введите данные",
  lineHeights: [
    "0.2",
    "0.3",
    "0.4",
    "0.5",
    "0.6",
    "0.8",
    "1.0",
    "1.2",
    "1.4",
    "1.5",
    "2.0",
    "3.0",
  ],
  fontNames: ["Arial", "Times New Roman", "Open Sans"],
  disableDragAndDrop: true,
  callbacks: {
    onImageUpload: function (file) {
      uploadFile(file[0], this);
    },
  },
});

// Upload file on the server.
function uploadFile(file, editor) {
  let data = new FormData();
  data.append("image", file);

  let base_url = window.location.href.split("/");
  let id = base_url[5];
  data.append("_method", "PUT");

  $.ajax({
    url: `/uploadImage/${id}`,
    cache: false,
    contentType: false,
    processData: false,
    data: data,
    type: "post",
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
    success: function (response) {
      if (response.type = "img"){
        $(editor).summernote("editor.insertImage", response.url);
      } else {
        $("#summernote").summernote("createLink", {
          text: "This is the Summernote's Official Site",
          url: response.url,
          isNewWindow: true,
        });
      }
    },
  });
}

$(".summernote_news").summernote({
  lang: "ru-RU",
  height: 300,
  minHeight: 200,
  maxHeight: 400,
  focus: true,
  placeholder: "Введите данные",
  fontNames: ["Arial", "Times New Roman", "Open Sans"],
  disableDragAndDrop: true,
  callbacks: {
    onImageUpload: function (file) {
      uploadNewsFile(file[0], this);
    },
  },
});

// Upload file on the server.
function uploadNewsFile(file, editor) {
  let data = new FormData();
  data.append("img", file);

  data.append("_method", "PUT");

  $.ajax({
    url: "/uploadNewsImage",
    cache: false,
    contentType: false,
    processData: false,
    data: data,
    type: "post",
    headers: {
      "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
    },
    success: function (url) {
      $(editor).summernote("editor.insertImage", url);
    },
    error: function (data) {
      console.log(data);
    },
  });
}
