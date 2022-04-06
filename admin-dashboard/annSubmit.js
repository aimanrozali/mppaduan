$(document).ready(function (e) {
  $("#forms-popup").on('submit', (function (e) {
    e.preventDefault();
    $.ajax({
      url: "announceAdd.php",
      type: "POST",
      data: new FormData(this),
      contentType: false, cache: false, processData: false,
      success: function (data) {
        alert("Data inserted");
        $("#forms-popup")[0].reset();
      },
      error: function () { }
    });
  }));
});