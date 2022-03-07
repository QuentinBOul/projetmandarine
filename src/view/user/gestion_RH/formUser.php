<h1 class="text-center">Ajouter un employé</h1>

<div>
    <a href="dashboard3" class="btn btn-secondary mx-5 my-3" style="float: left;">Retour</a>
</div>

<div class="container col-md-6 my-5" id="formUser">
    <form action="addUser" method="POST" class="needs-validation" novalidate
        oninput='confirm_pass_user.setCustomValidity(pass_user.value != confirm_pass_user.value ? "Passwords do not match." : "")'>
        <div class="form-group my-2">
            <label for="login_user">Login</label>
            <input type="text" name="login_user" class="form-control" maxlength="32" id="login_user" required>
        </div>
        <div class="form-group my-2">
            <label for="pass_user">Mot de passe</label>
            <input type="password" name="pass_user" class="pwd form-control" maxlength="32" id="pass_user" required>
        </div>
        <div class="form-group my-2">
            <label for="pass_user">Confirmez mot de passe</label>
            <input type="password" name="confirm_pass_user" class="pwd form-control" maxlength="32"
                id="confirm_pass_user" required>
            <input type="checkbox" onclick="pwdToggle()"> Show Password

        </div>
        <div class="form-group my-2">
            <select class="form-select" aria-label="Default select example" name="role" id="role" required>
                <option value="" selected disabled hidden>Selectionnez un service</option>
                <option value="rh">Ressources humaine</option>
                <option value="dev">Développeur</option>
                <option value="com">Commerciale</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary my-2">Ajouter</button>
    </form>
</div>