<div class="container my-5">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <div class="card">
                <div class="card-body text-center" style="background-color: rgba(112, 114, 110, 0.2); box-shadow: 0px 10px 10px rgba(112, 114, 110, 0.8);">
                    <h5 class="card-title" style="font-size: xx-large">Liste des Clients</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div>
    <a href="dashboard1" class="btn btn-secondary mx-3 my-2" style="float: right;">Retour</a>
</div>
<div>
    <a href="formClient" class="btn btn-success mx-3" style="float:right;">Ajouter un client</a>
</div>

<div class="col-md-8 offset-md-2 mb-4 mb-md-0">
    <table id="test" class="display text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Secteur</th>
                <th>Raison sociale</th>
                <th>Code postal</th>
                <th>Ville</th>
                <th>Afficher</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clients as $client) : ?>
                <tr>
                    <td><?= htmlspecialchars($client->getId_client()) ?></td>
                    <td><?= htmlspecialchars($client->getId_sect()) ?></td>
                    <td><?= htmlspecialchars($client->getRaison_sociale()) ?></td>
                    <td><?= htmlspecialchars($client->getCode_postal_client()) ?></td>
                    <td><?= htmlspecialchars($client->getVille_client()) ?></td>
                    <td>
                        <form action="<?= "clientProfil=" . htmlspecialchars($client->getId_client()) ?>" method="get">
                            <button type="submit" class="button btn btn-secondary">></a>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>