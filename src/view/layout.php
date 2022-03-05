<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" defer></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <script src="./public/assets/js/main.js" defer></script>
    <title>Projet Mandarine</title>

</head>

<body>

    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="./"><img src="./public/assets/img/abilogo.jpg" alt="logo" height="60%" width="60%"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mob-navbar" aria-label="Toggle">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mob-navbar">
                <ul class="navbar-nav mb-3 mb-lg-0 mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./">Accueil</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">Les Dashboards</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="dashboard1">Dashboard1 (com)</a></li>
                            <li><a class="dropdown-item" href="dashboard2">Dashboard2 (dev)</a></li>
                            <li><a class="dropdown-item" href="dashboard3">Dashboard3 (rh)</a></li>
                        </ul>
                    </li>
                </ul>
                <?php
                session_start();
                if (isset($_SESSION['user']) && $_SESSION['isLogged'] == true ){
                    echo '<span id="bjrconnect"> Bienvenue ', $_SESSION['user']->getLoginUser(), '</span>';
                    echo  '<a href="./logout"><button class="btn btn-warning" type="submit">Logout</button></a>';
                }else{
                    echo '<form class="d-flex" action="" method="post">';
                    echo '<input class="form-control me-2" type="text" placeholder="Username" name="username" />';
                    echo '<input class="form-control me-2" type="password" placeholder="Password" name="password" />';
                    echo  '<button class="btn btn-primary" type="submit">Login</button>';
                    echo "</form>";
                    
                }
                ?>
            </div>
        </div>
    </nav>
    </header>
    <hr>

    <?= $content ?>

    <!-- <footer class="text-center"
        style="width: 100%; height: 100px; background-color: gray; position: absolute; bottom: 0;">
        <h1>footer</h1>
    </footer> -->

</body>

</html>