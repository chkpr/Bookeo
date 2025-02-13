<?php

namespace App\Repository;

use App\Entity\Type;
use App\Db\Mysql;
use App\Tools\StringTools;

class TypeRepository

{
    public function getType($pdo)
     {
        $mysql = Mysql::getInstance();
        $pdo = $mysql->getPDO();

        $query = $pdo->prepare('SELECT * FROM type');
       
        $query->execute();
        $types= $query->fetchAll($pdo::FETCH_ASSOC);



        return $types;
        
    } 
}