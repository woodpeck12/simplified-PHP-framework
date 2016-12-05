<?php


//add configure data into $registry
App::bind('config',require 'config.php');

//Database handler add
//App::bind('database');
App::bind('database',new QueryHandling(DbConnection::make(App::get('config')['database'])));




function viewPages($pageName,$data=[]){

    extract($data);
    return require "./Views/{$pageName}.view.php";

}