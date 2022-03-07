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

//Table ordering
$(document).ready(function () {
  $("#usersTable").DataTable({
    columnDefs: [
      {
        // The `data` parameter refers to the data for the cell (defined by the
        // `data` option, which defaults to the column being worked with, in
        // this case `data: 0`.
        render: function (data, type, row) {
          return data;
        },
        targets: 0,
      },
      { visible: true, targets: [3] },
    ],
  });
});
