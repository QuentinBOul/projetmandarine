<div class="container my-5">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <div class="card">
                <div class="card-body text-center" style="background-color: rgba(112, 114, 110, 0.2); box-shadow: 0px 10px 10px rgba(112, 114, 110, 0.8);">
                    <h5 class="card-title" style="font-size: xx-large">Profil Client</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
  <form action="editClient" method="POST">
    <table class="table table-striped text-center" style="width: 40%; margin-left:auto; margin-right:auto;">
      <h2 class="text-center">ID CLIENT : <input class="text-center" type="text" size="1" name="idClient" value="<?= htmlspecialchars($client->getId_client()) ?>" readonly></h2><br>
      <tbody>
        <tr>
          <th scope="row">ID Secteur d'activité :</th>
          <td>
            <input type="text" class="text-center" size="1" name="secteur" value="<?= htmlspecialchars($client->getId_sect()) ?>" readonly>
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
    <div class="text-center m-2">
      <a href="clients" class="btn btn-secondary">Retour</a>
      <button type="submit" class="btn btn-warning mx-3">Modifier</button>
      <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Supprimer</button>
    </div>
  </form>
</div>

<!-- Confirmation de suppression -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirmez-vous la suppression du client n°<?= htmlspecialchars($client->getId_client()) ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        <strong>Attention !</strong><br>
        (La suppression de ce client entrainera celle du contact concerné)
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
        <form action="deleteClient" method="POST">
          <h2 hidden>ID CLIENT : <input class="text-center" type="text" size="1" name="idClient" value="<?= htmlspecialchars($client->getId_client()) ?>" readonly></h2>
          <button type="submit" class="btn btn-danger">Confirmer</button>
        </form>
      </div>
    </div>
  </div>
</div>