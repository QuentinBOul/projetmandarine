<div class="container mt-5">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <div class="card">
                <div class="card-body text-center"
                    style="background-color: rgba(112, 114, 110, 0.2); box-shadow: 0px 10px 10px rgba(112, 114, 110, 0.8);">
                    <h5 class="card-title" style="font-size: xx-large">Formulaire de Contact</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container formucontact">
    <form action="" method="post" class="needs-validation" novalidate>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Votre adresse e-mail</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" required>
        </div>
        <div class="mb-3">
            <label for="firstName" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="firstName" name="firstName" required>
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label">Nom</label>
            <input type="text" class="form-control" id="lastName" name="lastName" required>
        </div>
        <div class="mb-3">
            <label for="subject" class="form-label">Sujet</label>
            <input type="text" class="form-control" id="subject" name="subject" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Votre demande</label>
            <textarea class="form-control" id="content" name="content" required></textarea>
        </div>


        <button type="submit" class="btn btn-primary">Envoyer</button>
    </form>
</div>