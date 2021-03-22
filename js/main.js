$(document).ready(function () {
  $("#btn_username").click(function () {
    let boolVer = $("#divUsername").hasClass("d-none");

    if (!boolVer) {
      $("#divUsername").addClass("d-none");

      $("#inputUsername").removeClass("d-none");
    } else {
      $("#inputUsername").addClass("d-none");

      $("#divUsername").removeClass("d-none");
    }
  }),
    $("#btn_email").click(function () {
      let boolVer = $("#divEmail").hasClass("d-none");

      if (!boolVer) {
        $("#divEmail").addClass("d-none");

        $("#inputEmail").removeClass("d-none");
      } else {
        $("#inputEmail").addClass("d-none");

        $("#divEmail").removeClass("d-none");
      }
    }),
    $("#btn_password").click(function () {
      let boolVer = $("#divPassword").hasClass("d-none");

      if (!boolVer) {
        $("#divPassword").addClass("d-none");

        $("#inputPassword").removeClass("d-none");
      } else {
        $("#inputPassword").addClass("d-none");

        $("#divPassword").removeClass("d-none");
      }
    });
});
