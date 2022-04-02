$(document).ready(function (e) {
  $("#forms-popup").on('btn', (function (e) {
    e.preventDefault();
    $.ajax({
      url: "announceAdd.php",
      type: "POST",
      data: new FormData(this),
      contentType: false,
      cache: false,
      processData: false,
      beforeSend: function () {
        $("#err").fadeout();
      },
      success: function (data) {
        if (data == 'invalid') {
          // Invalid file
          $("#err").html("Invalid File!").fadeIn();
        }
        else {
          //view uploaded file.
          $("#preview").html(data).fadeIn();
          $("#form")[0].reset();
        }
      },
      error: function (e) {
        $("#err").html(e).fadeIn();
      }
    });
  }));
});