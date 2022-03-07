<div>
    <a href="formUser" class="btn btn-success mx-5 my-3" style="float:right;">Ajouter un employé</a>
</div>
<div class="container col-md-10">
    <table id="usersTable" class=" display text-center">
        <thead>
            <tr>
                <th>#</th>
                <th>Login</th>
                <th>Fonction</th>
                <th>Profil</th>
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
                    <div>
                        <form action="<?= "profilUser=" . htmlspecialchars($user->getIdUser()) ?>" method="get">
                            <button type="submit" class="button btn btn-primary">Voir profil ></a>
                        </form>
                    </div>
                </td>
            </tr>
            <?php  endforeach; ?>
        </tbody>
    </table>
</div>