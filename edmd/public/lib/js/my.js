$(document).ready(function () {
  $.ajax({
    type: "post",
    url: "../../src/routes/routes.php",
    data: {
      type: "login",
      user: "qwe",
      pass: "qwe",
    },
    success: function (data) {
      console.log(data);
    },
  });
});
