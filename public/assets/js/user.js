//show password text
function pwdToggle() {
  var pwds = document.getElementsByClassName("pwd");
  for (var i = 0; i < pwds.length; i++) {
    if (pwds[i].type === "password") {
      pwds[i].type = "text";
    } else {
      pwds[i].type = "password";
    }
  }
}

//form validation
(function () {
  "use strict";

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll(".needs-validation");

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();

//password confirmation matching

/*var check = function () {
  if (
    document.getElementById("pass_user").value ==
    document.getElementById("confirm_pass_user").value
  ) {
    document.getElementById("pass_user").classList.add = "green";
  } else {
    document.getElementById("pass_user").style.color = "red";
  }
};*/
