<div class="container">
    <?php if (isset($error) && !empty($error)) : ?>
    <div class="alert alert-danger" role="alert">
        <?= $error ?>
    </div>
    <?php endif; ?>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-sm-8 offset-sm-2">
            <div class="card">
                <div class="card-body text-center" style="background-color: rgba(112, 114, 110, 0.2); box-shadow: 0px 10px 10px rgba(112, 114, 110, 0.8);">
                    <h5 class="card-title" style="font-size: xx-large">Accueil</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <div class="card flex-row article"><img class="card-img-left example-card-img-responsive"
            src="./public/assets/img/imgartc1.jpg" height="30%" width="30%" />
        <div class="card-body">
            <h4 class="card-title h5 h4-sm">Arrivée d'un nouvel élément dans l'équipe !</h4>
            <p class="card-text">Nous souhaitons une bonne entrée dans l'entreprise à Dave Lopper, qui nous rejoint
                pour étoffer un effectif d'une rare qualité, son expérience de plusieurs années dans le domaine
                du développement web feront certainement de lui un acteur majeur dans l'entreprise !
            </p>
        </div>
    </div>

    <div class="card flex-row article"><img class="card-img-left example-card-img-responsive"
            src="./public/assets/img/imgartc2.jpg" height="30%" width="30%" />
        <div class="card-body">
            <h4 class="card-title h5 h4-sm">Bonne retraite à notre DRH !</h4>
            <p class="card-text">Monsieur Dereck Teur, l'heure est venue à présent de vous souhaiter
                une bonne retraite, retraite méritée après toutes ces années passées à travailler à nos côtés.
                Merci pour nous avoir transmis une partie de vos compétences, de votre savoir faire et
                de votre savoir être. N'oubliez pas de repasser de temps en temps pour voir ce que nous sommes devenus !
            </p>
        </div>
    </div>

    <div class="card flex-row article"><img class="card-img-left example-card-img-responsive"
            src="./public/assets/img/imgartc3.jpg" height="30%" width="30%" />
        <div class="card-body">
            <h4 class="card-title h5 h4-sm">Vos retours sur les dernières mesures !</h4>
            <p class="card-text">Bonjour à tous nos collaborateurs ! Nous avons mis en place dans vos espaces respectifs
                un questionnaire de satisfaction sur les dernières mesures prises en rapport avec l'entreprise,
                 nous espérons que vos retours seront positifs ! Bonne journée à tous !
            </p>
        </div>
    </div>
</div>