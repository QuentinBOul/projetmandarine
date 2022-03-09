<div class="container my-5">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <div class="card">
                <div class="card-body text-center" style="background-color: rgba(112, 114, 110, 0.2); box-shadow: 0px 10px 10px rgba(112, 114, 110, 0.8);">
                    <h5 class="card-title" style="font-size: xx-large">Nouveau Client</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div>
  <a href="clients" class="btn btn-secondary mx-3 my-3" style="float: right;">Retour</a>
</div>

<div class="container col-md-6 my-5" id="formClient">
    <form action="addClient" method="POST">
        <div class="form-group my-2">
            <label for="idSect">ID secteur d'activité</label>
            <div class="form-check form-check-inline mx-5">
                <input class="form-check-input" type="radio" name="secteur" id="secteur" value="1" required>
                <label class="form-check-label" for="secteur">1</label>
            </div>
            <div class="form-check form-check-inline mx-5">
                <input class="form-check-input" type="radio" name="secteur" id="secteur" value="2" required>
                <label class="form-check-label" for="secteur">2</label>
            </div>
            <div class="form-check form-check-inline mx-5">
                <input class="form-check-input" type="radio" name="secteur" id="secteur" value="3" required>
                <label class="form-check-label" for="secteur">3</label>
            </div>
        </div>
        <div class="form-group my-2">
            <label for="raisonSociale">Raison sociale</label>
            <input type="text" name="raisonSociale" class="form-control" maxlength="50" id="raisonSociale" required>
        </div>
        <div class="form-group my-2">
            <label for="adresse">Adresse</label>
            <input type="text" name="adresse" class="form-control" maxlength="32" id="adresse" required>
        </div>
        <div class="form-group my-2">
            <label for="codePostal">Code postal</label>
            <input type="text" name="codePostal" class="form-control" maxlength="5" id="codePostal" required>
        </div>
        <div class="form-group my-2">
            <label for="ville">Ville</label>
            <input type="text" name="ville" class="form-control" maxlength="25" id="ville" required>
        </div>
        <div class="form-group my-2">
            <label for="ca">CA</label>
            <input type="number" name="ca" class="form-control" id="ca" required>
        </div>
        <div class="form-group my-2">
            <label for="effectif">Effectif</label>
            <input type="number" name="effectif" class="form-control" id="effectif" required>
        </div>
        <div class="form-group my-2">
            <label for="tel">Téléphone</label>
            <input type="text" name="tel" class="form-control" maxlength="15" id="tel" required>
        </div>
        <div class="form-group my-2">
            <label for="type">Type</label>
            <input type="text" name="type" class="form-control" maxlength="10" id="type" required>
        </div>
        <div class="form-group my-2">
            <label for="nature">Nature</label>
            <input type="text" name="nature" class="form-control" maxlength="15" id="nature" required>
        </div>
        <div class="form-group my-2">
            <label for="com">Commentaire</label>
            <textarea name="com" class="form-control" id="com" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success my-2">Ajouter</button>
    </form>
</div>