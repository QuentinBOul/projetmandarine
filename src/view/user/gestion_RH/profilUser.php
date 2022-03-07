<a href="dashboard3" class="btn btn-secondary mx-3 my-1">
    < Retour</a>

        <div class="container">
            <form action="editUser" method="POST">
                <table class="table table-striped text-center" style="width: 40%; margin-left:auto; margin-right:auto;">
                    <h2 class="text-center"><?= htmlspecialchars($user->getLoginUser()) ?></h2><br>
                    <tbody>
                        <tr>
                            <th scope="row">ID USER :</th>
                            <td>
                                <input id="user_id" type="text" class="text-center" size="1" name="id_user"
                                    value="<?= htmlspecialchars($user->getIdUser()) ?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Fonction :</th>
                            <td>
                                <select class="form-select" aria-label="Default select example"
                                    value="<?= htmlspecialchars($user->getRole()) ?>" name="role">
                                    <option value="rh">Ressources humaine</option>
                                    <option value="dev">Développeur</option>
                                    <option value="com">Commerciale</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Login</th>
                            <td>
                                <input type="text" name="login_user"
                                    value="<?= htmlspecialchars($user->getLoginUser()) ?>" maxlength="32">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Mot de passe</th>
                            <td>
                                <input type="password" name="pass_user"
                                    value="<?= htmlspecialchars($user->getPassUser()) ?>" maxlength="32">
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-center">
                    <button type="submit" class="btn btn-warning mx-3 my-1">Modifier</button>
                    <a href="deleteUser?id_user=<?= $user->getIdUser() ?>"
                        class="btn btn-danger mx-3 my-1">Supprimer</a>
                    <button class="btn btn-danger mx-3 my-1" onClick="deleteMsg(event)">Supprimer TEST</button>
                </div>
            </form>
        </div>