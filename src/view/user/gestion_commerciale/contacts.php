<div class="container my-5">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <div class="card">
                <div class="card-body text-center" style="background-color: rgba(112, 114, 110, 0.2); box-shadow: 0px 10px 10px rgba(112, 114, 110, 0.8);">
                    <h5 class="card-title" style="font-size: xx-large">Liste des Contacts</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div>
    <a href="dashboard1" class="btn btn-secondary mx-3 my-2" style="float: right;"><i class="bi bi-backspace"></i></a>
</div>
<div>
    <a href="formContact" class="btn btn-success mx-3" style="float:right;">Ajouter un contact</a>
</div>

<div class="col-md-8 offset-md-2 mb-4 mb-md-0">
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
                            <button type="submit" class="button btn btn-secondary"><i class="bi bi-eye"></i></a>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
