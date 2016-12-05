<?php
use MongoDB\Driver\Exception\Exception;

class QueryHandling
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table){
        $sql = $this->pdo->prepare("select * from $table");
        $sql->execute();
        return $sql->fetchAll();
    }

    public function insert($table,$para){
        $query = sprintf('insert into %s (%s) values(%s)',
            $table,
            implode(',',array_keys($para)),
            ':'.implode(',:',array_keys($para))
        );



        try {
            $sql = $this->pdo->prepare($query);

            $sql->execute($para);
        }
        catch(PDOException $err){

            ErrorHandle::errorProcess('Cannot find controller '.$err->getMessage());
            die();
           // die('db insert error'.$err->getMessage);
        }


    }
}