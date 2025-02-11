<?php

namespace App\Controller;

use App\Controller\BookController;
use App\Repository\BookRepository;
use App\Db\Mysql;

class PageController extends Controller
{
    public function route():void
    {
        try {

            if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'about':
                    //On appelle la méthode about
                    $this->about();
                    break;
                case 'home':
                    //charger le controller home
                    $this->home();
                    break;

                default:
                    //Erreur
                    throw new \Exception("Cette action n'existe pas : ".$_GET['action']);
                    break;
            }
        } else {
            //s'il n'y a pas d'action (si l'action n'est pas définie)
            throw new \Exception("Aucune action détectée");
        }

    } catch (\Exception $e) {
        $this->render('errors/default', [
            'error' => $e->getMessage()
        ]);
    }
        if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'about':
                    //charger le controller page
                    $this->about();
                    break;
                case 'home':
                    //charger le controller book
                    $this->home();
                    break;

                default:
                    //Erreur
                    break;
            }
        } else {
            //charger la page d'accueil
        }
    }

        /*
    Exemple d'appel depuis l'url
        ?controller=page&action=about
    */

    protected function about()
    {
        /* On pourrait récupérer les données en faisant appel au modèle */
        
        //$params = [
            //'test' => 'abc',
            //'test2' => 'abc2'
        //];
        

        $this->render('page/about', [
            'test' => 'abc',
            'test2' => 'abc2'
        ]);
    }

        /*
    Exemple d'appel depuis l'url
        ?controller=book&action=home
    */

    protected function home()
    {
        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();
        $bookRepository = new BookRepository;
        $books = $bookRepository->getBooks($pdo);

        $this->render('page/home', [
            'books' => $books
        ]);

        
    }



}