<h1 class="text-center">page ajout client</h1>

<div class="container col-md-6 my-5">
    <form action="" method="POST">
        <div class="form-group my-2">
            <label for="idSect">ID secteur d'activité</label>
            <div class="form-check form-check-inline mx-5">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="1">
                <label class="form-check-label" for="exampleRadios1">1</label>
            </div>
            <div class="form-check form-check-inline mx-5">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="2">
                <label class="form-check-label" for="exampleRadios2">2</label>
            </div>
            <div class="form-check form-check-inline mx-5">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="3">
                <label class="form-check-label" for="exampleRadios3">3</label>
            </div>
        </div>
        <div class="form-group my-2">
            <label for="raisonSociale">Raison sociale</label>
            <input type="text" class="form-control" id="raisonSociale">
        </div>
        <div class="form-group my-2">
            <label for="adresse">Adresse</label>
            <input type="text" class="form-control" id="adresse">
        </div>
        <div class="form-group my-2">
            <label for="codePostal">Code postal</label>
            <input type="text" class="form-control" id="codePostal">
        </div>
        <div class="form-group my-2">
            <label for="ville">Ville</label>
            <input type="text" class="form-control" id="ville">
        </div>
        <div class="form-group my-2">
            <label for="ca">CA</label>
            <input type="text" class="form-control" id="ca">
        </div>
        <div class="form-group my-2">
            <label for="effectif">Effectif</label>
            <input type="text" class="form-control" id="effectif">
        </div>
        <div class="form-group my-2">
            <label for="tel">Téléphone</label>
            <input type="text" class="form-control" id="tel">
        </div>
        <div class="form-group my-2">
            <label for="type">Type</label>
            <input type="text" class="form-control" id="type">
        </div>
        <div class="form-group my-2">
            <label for="nature">Nature</label>
            <input type="text" class="form-control" id="nature">
        </div>
        <div class="form-group my-2">
            <label for="com">Commentaire</label>
            <textarea class="form-control" id="com" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary my-2">Ajouter</button>
    </form>
</div>