<?php
define('_ROOTPATH_', __DIR__);


// Sécurise le cookie de session avec httponly
session_set_cookie_params([
    'lifetime' => 3600,
    'path' => '/',
    'domain' => $_SERVER['SERVER_NAME'],
    'httponly' => true
]);
session_start();

spl_autoload_register();

use App\Controller\Controller;
use App\Entity\User;

$controller = new Controller();
$controller->route();

?>