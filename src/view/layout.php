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
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="width: 100%">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav" style=" width: 100%">
                        <li class="nav-item">
                            <button type="button" class="btn btn-light" id="accueil"><a class="nav-link"
                                    href="./">Accueil</a></button>
                        </li>
                        <li style="margin-left:60%">
                            <div class="d-inline">
                                <form class="form-inline d-inline-flex " action="" method="post">
                                    <div class="form-group mb-2">
                                        <label for="staticEmail2" class="sr-only">Username</label>
                                        <input type="text" class="form-control" id="staticEmail2"
                                            value="username" name="username">
                                    </div>
                                    <div class="form-group mx-sm-3 mb-2">
                                        <label for="inputPassword2" class="sr-only">Password</label>
                                        <input type="password" class="form-control" id="inputPassword2"
                                            placeholder="password" name="password">
                                    </div>
                                    <button type="submit" class="btn btn-primary mb-2">Login</button>
                                </form>
                            </div>
                        </li>
                    </ul>
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