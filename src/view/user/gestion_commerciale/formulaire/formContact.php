<div class="container my-5">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <div class="card">
                <div class="card-body text-center" style="background-color: rgba(112, 114, 110, 0.2); box-shadow: 0px 10px 10px rgba(112, 114, 110, 0.8);">
                    <h5 class="card-title" style="font-size: xx-large">Nouveau Contact</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div>
  <a href="contacts" class="btn btn-secondary mx-3 my-3" style="float: right;"><i class="bi bi-backspace"></i></a>
</div>

<div class="container col-md-6 my-5" id="formClient">
    <form action="addContact" method="POST">
        <div class="form-group my-2">
            <label for="idClient">ID Client associé</label>
            <input type="number" name="idClient" class="form-control" id="idClient" required>
        </div>
        <div class="form-group my-2">
            <label for="idSect">ID Fonction</label>
            <div class="form-check form-check-inline mx-5">
                <input class="form-check-input" type="radio" name="fonction" id="fonction" value="1" required>
                <label class="form-check-label" for="fonction">1</label>
            </div>
            <div class="form-check form-check-inline mx-5">
                <input class="form-check-input" type="radio" name="fonction" id="fonction" value="2" required>
                <label class="form-check-label" for="fonction">2</label>
            </div>
            <div class="form-check form-check-inline mx-5">
                <input class="form-check-input" type="radio" name="fonction" id="fonction" value="3" required>
                <label class="form-check-label" for="fonction">3</label>
            </div>
            <div class="form-check form-check-inline mx-5">
                <input class="form-check-input" type="radio" name="fonction" id="fonction" value="4" required>
                <label class="form-check-label" for="fonction">4</label>
            </div>
            <div class="form-check form-check-inline mx-5">
                <input class="form-check-input" type="radio" name="fonction" id="fonction" value="5" required>
                <label class="form-check-label" for="fonction">5</label>
            </div>
        </div>
        <div class="form-group my-2">
            <label for="nom">Nom</label>
            <input type="text" name="nom" class="form-control" maxlength="32" id="nom" required>
        </div>
        <div class="form-group my-2">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" class="form-control" maxlength="32" id="prenom" required>
        </div>
        <div class="form-group my-2">
            <label for="tel">Téléphone</label>
            <input type="text" name="tel" class="form-control" maxlength="15" id="tel" required>
        </div>
        <div class="form-group my-2">
            <label for="email">E-mail</label>
            <input type="email" name="email" class="form-control" maxlength="50" id="email" required>
        </div>
        <div class="form-group my-2">
            <label for="photo">Photo</label>
            <input type="text" name="photo" class="form-control" maxlength="255" id="photo" required>
        </div>
        <div class="form-group my-2">
            <label for="duree">Durée</label>
            <input type="number" name="duree" class="form-control" id="duree" required>
        </div>
        <button type="submit" class="btn btn-success my-2">Ajouter</button>
    </form>
</div>