<?php

namespace App\Controller;

class PageController extends Controller
{
    public function route():void
    {
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'about':
                    //charger le controller page
                    $this->about();
                    break;
                case 'home':
                    //charger le controller book
                    var_dump('On appelle la méthode home');
                    break;

                default:
                    //Erreur
                    break;
            }
        } else {
            //charger la page d'accueil
        }
    }

    protected function about()
    {
        /* On pourrait récupérer les données en faisant appel au modèle */
        $params = [
            'test' => 'abc',
            'test2' => 'abc2'
        ];
        

        $this->render('page/about', $params);
    }

}