<h1 class="text-center my-5">Liste des contacts</h1>

<div>
    <a href="dashboard1" class="btn btn-secondary mx-5 my-3" style="float: left;">Retour</a>
</div>
<div>
    <a href="formContact" class="btn btn-success mx-5 my-3" style="float:right;">Ajouter un contact</a>
</div>

<div class="m-5">
    <table id="test" class="display text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>ID Client</th>
                <th>ID Fonction</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Afficher</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contacts as $contact) : ?>
                <tr>
                    <td><?= htmlspecialchars($contact->getId_contact()) ?></td>
                    <td><?= htmlspecialchars($contact->getId_client()) ?></td>
                    <td><?= htmlspecialchars($contact->getId_fonc()) ?></td>
                    <td><?= htmlspecialchars($contact->getNom_contact()) ?></td>
                    <td><?= htmlspecialchars($contact->getPrenom_contact()) ?></td>
                    <td>
                        <form action="<?= "contactProfil=" . htmlspecialchars($contact->getId_contact()) ?>" method="get">
                            <button type="submit" class="button btn btn-secondary">></a>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
