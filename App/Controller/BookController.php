<?php

namespace App\Controller;

use App\Repository\BookRepository;

class BookController extends Controller
{
    public function route():void
    {
        try {

            if (isset($_GET['action'])) {
            switch ($_GET['action']) {
                case 'show':
                    //On appelle la méthode about
                    $this->show();
                    break;
                case 'list':
                    //appeler la méthode list
                    break;
                case 'edit':
                    //appeler la méthode edit
                    break;
                case 'add':
                    //appeler la méthode Add
                    break;
                case 'delete':
                    //appeler la méthode Delete
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
    }

    /*
    Exemple d'appel depuis l'url
        ?controller=book&action=show&id=&
    */

    protected function show()
    {
        try  {
        

            if (isset($_GET['id'])) {  
                
                $id = (int)$_GET['id'];
                //Charger le livre par un appel au repository
                $bookRepository = new BookRepository;
                $book = $bookRepository->findOneById($id);

                $this->render('book/show', [
                    'book' => $book
                ]);
            } else {
                throw new \Exception("L'id est manquant en paramètre");
            }
        } catch (\Exception $e) {
            $this->render('errors/default', [
                'error' => $e->getMessage()
            ]);
        }

        
    }

}