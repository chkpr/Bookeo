<?php

namespace App\Repository;

use App\Entity\Book;
use App\Db\Mysql;
use App\Tools\StringTools;

class BookRepository
{
    public function findOneById(int $id)
    {
        // Appel bdd
        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();

        $query = $pdo->prepare('SELECT * FROM book 
                                JOIN author ON book.author_id = author.id
                                JOIN type ON book.type_id = type.id
                                WHERE book.id = :id');
        $query->bindValue(':id', $id, $pdo::PARAM_INT);
        $query->execute();
        $book =$query->fetch($pdo::FETCH_ASSOC);
        

        //$book = ['id' => 1, 'title' => 'titre test', 'description' => 'description test'];

        $bookEntity = new Book();
        
        /*$bookEntity->setId($book['id']);
        $bookEntity->setTitle($book['title']);
        $bookEntity->setDescription($book['description']);
        */

        foreach ($book as $key => $value) {
            //var_dump(StringTools::toPascalCase($key));
            $bookEntity->{'set'.StringTools::toPascalCase($key) }($value);
        }


        return $bookEntity;
    }

     public function getBookAuthor(int $id) {
        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();

        $query = $pdo->prepare('SELECT * FROM book
                                JOIN author ON book.author_id = author.id
                                WHERE book.id=:id');
        $query->bindValue(':id', $id, $pdo::PARAM_INT);
        $query->execute();
        $bookAuthor= $query->fetch($pdo::FETCH_ASSOC);
        return $bookAuthor;
        var_dump($bookAuthor);
    }

    public function getBookType($id)
     {
        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();

        $query = $pdo->prepare('SELECT * FROM book
                                JOIN type ON book.type_id = type.id
                                WHERE book.id=:id');
        $query->bindValue(':id', $id, $pdo::PARAM_INT);
        
        $query->execute();
        $bookType= $query->fetch($pdo::FETCH_ASSOC);
        return $bookType;
        var_dump($bookType);
    }

    public function getBooks($pdo) {
        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();

        $query = $pdo->prepare('SELECT * FROM book ORDER BY id ASC LIMIT 3');
        
        $query->execute();
        return $query->fetchAll($pdo::FETCH_ASSOC);
        

        //$book = ['id' => 1, 'title' => 'titre test', 'description' => 'description test'];

        $bookEntity = new Book();
    }

        public function getBookList($pdo) {
            $mysql = Mysql::getInstance();
            $pdo = $mysql->getPDO();

            $query = $pdo->prepare('SELECT book.*, author.first_name as author_first_name, author.last_name as author_last_name, type.name as type_name FROM book
                                JOIN author ON book.author_id = author.id
                                JOIN type ON book.type_id = type.id
                                ORDER BY id');
            $query->execute();
            $bookAuthor= $query->fetchAll($pdo::FETCH_ASSOC);
            return $bookAuthor;
            var_dump($bookAuthor);
        }

        public function addBook($pdo, string $title, string $description, string $image, int $author_id, int $type_id) {
  

            $query = $pdo->prepare('INSERT INTO book (title, description, image, author_id, type_id)
                                VALUES (:title, :description, :image, :author_id, :type_id)');
            $query->bindValue(':title', $title, $pdo::PARAM_STR);
            $query->bindValue(':description', $description, $pdo::PARAM_STR);
            $query->bindValue(':image', $image, $pdo::PARAM_STR);
            $query->bindValue(':author_id', $author_id, $pdo::PARAM_INT);
            $query->bindValue(':type_id', $type_id, $pdo::PARAM_INT);
            $addTheBook = $query->execute();
            
        }

        public function modifyBook (Book $book) {
            if ($book->getId() !== null) {
            $query = $this->pdo->prepare(
                'UPDATE book SET title = :title, 
                        description = :description, type_id = :type_id, author_id = :author_id, image = :image WHERE id = :id'
            );
            $query->bindValue(':id', $book->getId(), $this->pdo::PARAM_INT);
            $edit = $query->execute();
        
            };
        }
    }
