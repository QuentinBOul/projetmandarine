<h1 class="text-center m-5">Profil Contact</h1>

<div class="container">
  <form action="editContact" method="POST">
    <table class="table table-striped text-center" style="width: 40%; margin-left:auto; margin-right:auto;">
      <h2 class="text-center">ID CONTACT : <input class="text-center" type="text" size="1" name="idContact" value="<?= htmlspecialchars($contact->getId_contact()) ?>" readonly></h2><br>
      <tbody>
        <tr>
          <th scope="row">ID Client :</th>
          <td>
            <input type="text" class="text-center" size="1" name="idClient" value="<?= htmlspecialchars($contact->getId_client()) ?>" readonly>
          </td>
        </tr>
        <tr>
          <th scope="row">ID Fonction :</th>
          <td>
            <input type="number" name="idFonction" value="<?= htmlspecialchars($contact->getId_fonc()) ?>">
          </td>
        </tr>
        <tr>
          <th scope="row">Nom :</th>
          <td>
            <input type="text" name="nom" value="<?= htmlspecialchars($contact->getNom_contact()) ?>" maxlength="32">
          </td>
        </tr>
        <tr>
          <th scope="row">Prénom :</th>
          <td>
            <input type="text" name="prenom" value="<?= htmlspecialchars($contact->getPrenom_contact()) ?>" maxlength="32">
          </td>
        </tr>
        <tr>
          <th scope="row">Téléphone :</th>
          <td>
            <input type="text" name="tel" value="<?= htmlspecialchars($contact->getTel_contact()) ?>" maxlength="15">
          </td>
        </tr>
        <tr>
          <th scope="row">E-mail :</th>
          <td>
            <input type="text" name="email" value="<?= htmlspecialchars($contact->getEmail_contact()) ?>" maxlength="50">
          </td>
        </tr>
        <tr>
          <th scope="row">Photo :</th>
          <td>
            <input type="text" name="photo" value="<?= htmlspecialchars($contact->getPhoto()) ?>" maxlength="255">
          </td>
        </tr>
        <tr>
          <th scope="row">Durée :</th>
          <td>
            <input type="number" name="duree" value="<?= htmlspecialchars($contact->getDuree()) ?>">
          </td>
        </tr>
      </tbody>
    </table>
    <div class="text-center">
      <a href="contacts" class="btn btn-secondary mx-3 my-1">Retour</a>
      <button type="submit" class="btn btn-warning">Modifier</button>
    </div>
  </form>
</div>