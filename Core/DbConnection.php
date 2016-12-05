<?php

class DbConnection
{
    public static function make($config){
        try {
            return new PDO(
                $config['connection'].';dbname='.$config['dbname'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        }
        catch(PDOException $err){

            ErrorHandle::errorProcess('DB Connection Error'.$err->getMessage());
            die();
        }



    }


}