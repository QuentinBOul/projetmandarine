("use strict");
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
    language: {
      sProcessing: "Traitement en cours ...",
      sLengthMenu: "Afficher _MENU_ lignes",
      sZeroRecords: "Aucun résultat trouvé",
      sEmptyTable: "Aucune donnée disponible",
      sInfo: "Lignes _START_ à _END_ sur _TOTAL_",
      sInfoEmpty: "Aucune ligne affichée",
      sInfoFiltered: "(Filtrer un maximum de_MAX_)",
      sInfoPostFix: "",
      sSearch: "Recherche : ",
      sUrl: "",
      sInfoThousands: ",",
      sLoadingRecords: "Chargement...",
      oPaginate: {
        sFirst: "Premier",
        sLast: "Dernier",
        sNext: "Suivant",
        sPrevious: "Précédent",
      },
      oAria: {
        sSortAscending: ": Trier par ordre croissant",
        sSortDescending: ": Trier par ordre décroissant",
      },
    },
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

//confirmation suppression message

function deleteMsg(event) {
  event.preventDefault();
  var id = document.getElementById("user_id").value;
  swal({
    title: "Etes vous sure?",
    text: "Une fois supprimer il sera impossible de récupérer les informations!",
    icon: "warning",
    buttons: true,
    dangerMode: true,
  }).then((willDelete) => {
    if (willDelete) {
      $.ajax({
        url: "deleteUser",
        type: "GET",
        data: { id_user: id },
        dataType: "text",
        success: function () {
          swal("Utilisateur supprimé avec succés", {
            icon: "success",
          }).then(() => {
            window.location = "dashboard3";
          });
        },
        error: function () {
          swal("Echec de la suppression", { icon: "error" });
        },
      });
    }
  });
}
