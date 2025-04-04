<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/override-bootstrap.css">

    <title>Document</title>
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
            <li><a href="index.php?controller=book&action=add" class="nav-link px-2">Gérer</a></li>
            </ul>

            <div class="col-md-3 text-end">
            <button type="button" class="btn btn-outline-primary me-2">Connexion</button>
            
            </div>
        </header>
    

        <main>