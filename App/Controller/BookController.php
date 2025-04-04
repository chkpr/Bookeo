<?php

namespace App\Controller;

use App\Repository\BookRepository;
use App\Repository\AuthorRepository;
use App\Repository\TypeRepository;
use App\Db\Mysql;


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
                    $this->list();
                    //appeler la méthode list
                    break;
                case 'edit':
                    $this->edit();
                    break;
                case 'add':
                    $this->add();
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

                
                //$bookRepository = new BookRepository;
                //$authorRepository = new AuthorRepository;
                //$bookAuthor = $bookRepository->getBookAuthor($id);
                //var_dump($bookAuthor);
                //$bookType = $bookRepository->getBookType($id);
                

                $this->render('book/show', [
                    'book' => $book,
                    //'bookAuthor' => $bookAuthor,
                    //'bookType' => $bookType
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

    protected function list() 
    {
        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();
        $bookRepository = new BookRepository;
        $books = $bookRepository->getBookList($pdo);
        

        $this->render('book/all', [
                    'books' => $books,
                    
                ]);
        var_dump($books);
    }

    protected function add()
    {

        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();


        if(isset($_POST['addBook']))
        {
            $bookRepository = new BookRepository;
            $addTheBook = $bookRepository->addBook($pdo, $_POST['title'], $_POST['description'], $_POST['image'], $_POST['author_id'], $_POST['type_id']);
        };

        $authorRepository = new AuthorRepository;
        $authors = $authorRepository->getAuthor($pdo);
        

        $typeRepository = new TypeRepository;
        $types = $typeRepository->getType($pdo);

        $this->render('book/add', [
            'authors' => $authors,
            'types' => $types
        ]);

    }

}