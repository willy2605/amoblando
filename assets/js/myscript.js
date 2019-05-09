// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  "use strict";
  window.addEventListener("load", function () {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName("nv");
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function (form) {
      form.addEventListener("submit", function (event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add("was-validated");
      }, false);
    });
  }, false);
})();

/* By: Freelancing Care, Youtube Channel */

this.psedoTooltip = function () {
  /* Config */
  xOffset = 10;
  yOffset = 30;

  // These two variable determine popup's distance from the cursor.
  // You might want to adjust to get the right result.

  /* End Config */
  $("a.preview").hover(function (e) {
    this.t = this.title;
    this.title = "";
    var c = this.t != ""
      ? "<br/>" + this.t
      : "";
    $("body").append("<p id='screenshot'><img src='" + this.rel + "' alt='tooltip' height='200' />" + c + "</p>");
    $("#screenshot").css("top", e.pageY - xOffset + "px").css("left", e.pageX + yOffset + "px").fadeIn("fast");
  }, function () {
    this.title = this.t;
    $("#screenshot").remove();
  });
  $("a.preview ").mousemove(function (e) {
    $("#screenshot").css("top", e.pageY - xOffset + "px").css("left", e.pageX + yOffset + "px");
  });
};

//Staring the script on page load

$(document).ready(function () {
  psedoTooltip();
});

/* Youtube: https://youtu.be/sAxwoBdB_rQ */