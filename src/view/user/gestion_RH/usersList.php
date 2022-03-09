<div class="container my-5">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <div class="card">
                <div class="card-body text-center"
                    style="background-color: rgba(112, 114, 110, 0.5); box-shadow: 0px 10px 10px rgba(112, 114, 110, 0.8);">
                    <h5 class="card-title" style="font-size: xx-large">DASHBOARD Gestion RH</h5>
                </div>
            </div>
        </div>
    </div>
</div>


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
                            <button type="submit" class="button btn btn-secondary"> Voir le profil</a>
                        </form>
                    </div>
                </td>
            </tr>
            <?php  endforeach; ?>
        </tbody>
    </table>
</div>