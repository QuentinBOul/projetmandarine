<div>
    <a href="formUser" class="btn btn-success mx-5 my-3" style="float:right;">Ajouter un employé</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Fonction</th>
        </tr>
    </thead>
    <tbody>
        <?php
                foreach($users as $user):?>
        <tr>
            <td><?= $user->getIdUser() ?></td>
            <td><?= $user->getLoginUser() ?></td>
            <td> <?php switch($user->getRole()){
                case "rh":
                    echo "Ressources Humaines";
                    break;
                case "dev":
                    echo "Développeur";
                    break;
                case "com":
                    echo "Commerciale";
                    break;
            } ?>
            </td>
            <td>
                <form action="<?= "userProfil=" . htmlspecialchars($user->getIdUser()) ?>" method="get">
                    <button type="submit" class="button btn btn-secondary">></a>
                </form>
            </td>
        </tr>
        <?php  endforeach; ?>


    </tbody>
</table>