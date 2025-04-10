<?php 
    use App\Entity\User;
    use App\Tools\NavigationTools;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/override-bootstrap.css">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <title>Bookéo</title>
</head>
<body>

    <div class="container">

        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
            <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                <img width="90" src="assets/images/logo-bookeo.jpg" alt="logo Bookeo">
            </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="index.php" class="nav-link px-2 link-secondary">Accueil</a></li>
            <li><a href="index.php?controller=book&action=list" class="nav-link px-2">Tous les livres</a></li>
            <li><a href="index.php?controller=page&action=about" class="nav-link px-2">À propos</a></li>
            <?php if (User::isLogged()) { ?>
            <li><a href="index.php?controller=book&action=add" class="nav-link px-2">Gérer</a></li>
            <?php } ?>
            </ul>

            <div class="col-md-3 text-end">
            <?php if (User::isLogged()) { ?>
                    <a href="/index.php?controller=auth&action=logout" class="btn btn-primary">Déconnexion</a>
                    
                <?php } else { ?>
                    <a href="/index.php?controller=auth&action=login" class="btn btn-outline-primary me-2 <?= NavigationTools::addActiveClass('auth', 'login') ?>">Connexion</a>
                    <a href="/index.php?controller=user&action=register" class="btn btn-outline-primary me-2 <?= NavigationTools::addActiveClass('user', 'register') ?>">Inscription</a>
                <?php } ?>
            
            </div>
        </header>
    

        <main>