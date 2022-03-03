<h1 class="text-center my-5">Liste des clients</h1>
<a href="addClient" class="btn btn-primary mx-5 my-3" style="float: right;">Ajouter un client</a>


<div class="m-5">
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