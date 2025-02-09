<?php

namespace App\Controller;

Class Controller
{
    public function route():void
    {
        try {
            if (isset($_GET['controller'])) {
            switch ($_GET['controller']) {
                case 'page':
                    //charger le controller page
                    $pageController = new PageController();
                    $pageController->route();
                    break;
                case 'book':
                    //charger le controller book
                    var_dump('On charge BookController');
                    break;

                default:
                    //Erreur
                    break;
            }
        } else {
            //charger la page d'accueil
        }
        
        
    }

    protected function render(string $path, array $params = []):void
    {
        $filePath = _ROOTPATH_.'/templates/'.$path.'.php';

        try {
            if (!file_exists($filePath)) {
                throw new \Exception("Fichier non trouvé : ".$filePath);

            } else {
                extract($params);
                require_once $filePath;
            }
        } catch(\Exception $e) {
            echo $e->getMessage();
        }

        

        //require_once _ROOTPATH_.'/templates/page/about.php';
    }
}