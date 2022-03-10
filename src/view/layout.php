<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"
        defer></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js" defer>
    </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <script src="./public/assets/js/main.js" defer></script>
    <script src="./public/assets/js/user.js" defer></script>

    <title>Projet Mandarine</title>

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="./"><img src="./public/assets/img/abilogo.jpg" alt="logo" height="60%"
                        width="60%"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mob-navbar"
                    aria-label="Toggle">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mob-navbar">
                    <ul class="navbar-nav mb-3 mb-lg-0 mx-auto">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./">Accueil</a>
                        </li>
                        <?php
                            if (isset($_SESSION['user']) && $_SESSION['isLogged'] == true && $_SESSION['user']->getRole() == 'com' ){
                            echo '<a class="nav-link active" aria-current="page" href="./dashboard1">Tableau de bord</a>';}
                            if (isset($_SESSION['user']) && $_SESSION['isLogged'] == true && $_SESSION['user']->getRole() == 'dev' ){
                            echo '<a class="nav-link active" aria-current="page" href="./dashboard2">Tableau de bord</a>';}
                            if (isset($_SESSION['user']) && $_SESSION['isLogged'] == true && $_SESSION['user']->getRole() == 'rh' ){
                            echo '<a class="nav-link active" aria-current="page" href="./dashboard3">Tableau de bord</a>';}
                            if (isset($_SESSION['user'])){
                                echo '<a class="nav-link active" aria-current="page" href="./contact">Contact</a>';}
                        ?>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./a_propos">&Agrave; propos</a>
                        </li>
                    </ul>
                    <?php
                if (isset($_SESSION['user']) && $_SESSION['isLogged'] == true ){
                    echo '<span id="bjrconnect"> Bienvenue <b>', $_SESSION['user']->getLoginUser(), '</b></span>';
                    echo  '<a href="./logout"><button class="btn btn-danger" type="submit">Deconnexion</button></a>';
                }else{
                    echo '<form class="d-flex" action="" method="post">';
                    echo '<input class="form-control me-2" type="text" placeholder="Username" name="username" />';
                    echo '<input class="form-control me-2" type="password" placeholder="Password" name="password" />';
                    echo  '<button class="btn btn-primary" type="submit">Connexion</button>';
                    echo "</form>";
                    
                }
                ?>
                </div>
            </div>
        </nav>
        <hr>
    </header>

    <?= $content ?>

    <footer class="bg-light text-center text-lg-start">
        <hr>
  <!-- Grid container -->
  <div class="container p-3">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">Nous contacter</h5>

        <p><i class="bi-house"></i> 32 rue de la mandarine 35000 Rennes</p>
        <p><i class="bi-telephone"></i> 06-99-06-46-71</p>
        <p><i class="bi-envelope"></i> abi@informatique.com</p>
      </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase">A propos de nous</h5>

        <p>
        Depuis plus de 10 ans, Active Bretagne Informatique, situé à Rennes, accompagne
         les entreprises dans le déploiement de leur système informatique et dans le
          développement d’infrastructure et de réseaux. Quelque soit votre domaine
           d’activité ou votre taille, nous avons une solution adaptée à votre besoin.
        </p>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(112, 114, 110, 0.2);">
    © 2022 Copyright:
    <span class="text-dark">The Mandarine Project</span>
  </div>
  <!-- Copyright -->
</footer>

</body>

</html>