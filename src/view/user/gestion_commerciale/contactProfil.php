<h1 class="text-center m-5">Profil Contact</h1>


<table class="table table-striped text-center" style="width: 40%; margin-left:auto; margin-right:auto;">
      <h2 class="text-center">ID CONTACT : <?= htmlspecialchars($contact->getId_contact()) ?></h2><br>
  <tbody>
    <tr>
      <th scope="row">ID Client :</th>
      <td><?= htmlspecialchars($contact->getId_client()) ?></td>
    </tr>
    <tr>
      <th scope="row">ID Fonction :</th>
      <td><?= htmlspecialchars($contact->getId_fonc()) ?></td>
    </tr>
    <tr>
      <th scope="row">Nom :</th>
      <td><?= htmlspecialchars($contact->getNom_contact()) ?></td>
    </tr>
    <tr>
      <th scope="row">Prénom :</th>
      <td><?= htmlspecialchars($contact->getPrenom_contact()) ?></td>
    </tr>
    <tr>
      <th scope="row">Téléphone :</th>
      <td><?= htmlspecialchars($contact->getTel_contact()) ?></td>
    </tr>
    <tr>
      <th scope="row">E-mail :</th>
      <td><?= htmlspecialchars($contact->getEmail_contact()) ?></td>
    </tr>
    <tr>
      <th scope="row">Photo :</th>
      <td><?= htmlspecialchars($contact->getPhoto()) ?></td>
    </tr>
    <tr>
      <th scope="row">Durée :</th>
      <td><?= htmlspecialchars($contact->getDuree()) ?></td>
    </tr>
  </tbody>
</table>