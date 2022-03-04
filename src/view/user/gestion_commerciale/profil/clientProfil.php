<h1 class="text-center m-5">Profil Client</h1>

<div class="container">
  <form action="editClient" method="POST">
    <table class="table table-striped text-center" style="width: 40%; margin-left:auto; margin-right:auto;">
      <h2 class="text-center">ID CLIENT : <input class="text-center" type="text" size="1" name="idClient" value="<?= htmlspecialchars($client->getId_client()) ?>" readonly></h2><br>
      <tbody>
        <tr>
          <th scope="row">ID Secteur d'activité :</th>
          <td>
            <input type="text" class="text-center" size="1" name="idSecteur" value="<?= htmlspecialchars($client->getId_sect()) ?>" readonly>
          </td>
        </tr>
        <tr>
          <th scope="row">Raison sociale :</th>
          <td>
            <input type="text" name="raisonSociale" value="<?= htmlspecialchars($client->getRaison_sociale()) ?>" maxlength="50">
          </td>
        </tr>
        <tr>
          <th scope="row">Adresse :</th>
          <td>
            <input type="text" name="adresse" value="<?= htmlspecialchars($client->getAdresse_client()) ?>" maxlength="32">
          </td>
        </tr>
        <tr>
          <th scope="row">Code postale :</th>
          <td>
            <input type="text" name="codePostal" value="<?= htmlspecialchars($client->getCode_postal_client()) ?>" maxlength="5">
          </td>
        </tr>
        <tr>
          <th scope="row">Ville :</th>
          <td>
            <input type="text" name="ville" value="<?= htmlspecialchars($client->getVille_client()) ?>" maxlength="25">
          </td>
        </tr>
        <tr>
          <th scope="row">CA :</th>
          <td>
            <input type="number" name="ca" value="<?= htmlspecialchars($client->getCa()) ?>">
          </td>
        </tr>
        <tr>
          <th scope="row">Effectif :</th>
          <td>
            <input type="number" name="effectif" value="<?= htmlspecialchars($client->getEffectif()) ?>">
          </td>
        </tr>
        <tr>
          <th scope="row">Téléphone :</th>
          <td>
            <input type="text" name="tel" value="<?= htmlspecialchars($client->getTelephone_client()) ?>" maxlength="15">
          </td>
        </tr>
        <tr>
          <th scope="row">Type :</th>
          <td>
            <input type="text" name="type" value="<?= htmlspecialchars($client->getType_client()) ?>" maxlength="10">
          </td>
        </tr>
        <tr>
          <th scope="row">Nature :</th>
          <td>
            <input type="text" name="nature" value="<?= htmlspecialchars($client->getNature_client()) ?>" maxlength="15">
          </td>
        </tr>
        <tr>
          <th scope="row">Commentaire :</th>
          <td>
            <textarea name="com" id="com" cols="40"><?= htmlspecialchars($client->getCommentaire_client()) ?></textarea>
          </td>
        </tr>
      </tbody>
    </table>
    <div class="text-center">
      <a href="clients" class="btn btn-secondary mx-3 my-1">Retour</a>
      <button type="submit" class="btn btn-danger">Modifier</button>
    </div>
  </form>
</div>