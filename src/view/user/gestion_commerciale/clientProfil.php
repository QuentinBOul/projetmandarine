<h1 class="text-center m-5">Profil Client</h1>


<table class="table table-striped text-center" style="width: 40%; margin-left:auto; margin-right:auto;">
      <h2 class="text-center">ID CLIENT : <?= htmlspecialchars($client->getId_client()) ?></h2><br>
  <tbody>
    <tr>
      <th scope="row">ID Secteur d'activité :</th>
      <td><?= htmlspecialchars($client->getId_sect()) ?></td>
    </tr>
    <tr>
      <th scope="row">Raison sociale :</th>
      <td><?= htmlspecialchars($client->getRaison_sociale()) ?></td>
    </tr>
    <tr>
      <th scope="row">Adresse :</th>
      <td><?= htmlspecialchars($client->getAdresse_client()) ?></td>
    </tr>
    <tr>
      <th scope="row">Code postale :</th>
      <td><?= htmlspecialchars($client->getCode_postal_client()) ?></td>
    </tr>
    <tr>
      <th scope="row">Ville :</th>
      <td><?= htmlspecialchars($client->getVille_client()) ?></td>
    </tr>
    <tr>
      <th scope="row">CA :</th>
      <td><?= htmlspecialchars($client->getCa()) ?></td>
    </tr>
    <tr>
      <th scope="row">Effectif :</th>
      <td><?= htmlspecialchars($client->getEffectif()) ?></td>
    </tr>
    <tr>
      <th scope="row">Téléphone :</th>
      <td><?= htmlspecialchars($client->getTelephone_client()) ?></td>
    </tr>
    <tr>
      <th scope="row">Type :</th>
      <td><?= htmlspecialchars($client->getType_client()) ?></td>
    </tr>
    <tr>
      <th scope="row">Nature :</th>
      <td><?= htmlspecialchars($client->getNature_client()) ?></td>
    </tr>
    <tr>
      <th scope="row">Commentaire :</th>
      <td><?= htmlspecialchars($client->getCommentaire_client()) ?></td>
    </tr>
  </tbody>
</table>