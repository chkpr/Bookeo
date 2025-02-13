<?php

namespace App\Repository;

use App\Entity\Author;
use App\Db\Mysql;
use App\Tools\StringTools;

class AuthorRepository

{
    public function getAuthor($pdo)
     {
        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();

        $query = $pdo->prepare('SELECT * FROM author');
       
        $query->execute();
        $authors= $query->fetchAll($pdo::FETCH_ASSOC);



        return $authors;
        var_dump($authorEntity);
    } 
}