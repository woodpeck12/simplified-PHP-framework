<?php


class DefaultController
{

    public function view(){
        //$data = [
        //    'age' =>10,
        //    'name' => 'Stephan'
        //];

        $people = App::get('database')->selectAll('people');

        //var_dump(compact('people'));
        //die();

        return viewPages('view',compact('people'));
    }

    public function add(){

        return viewPages('add');
    }

    public function addAct(){

      App::get('database')->insert('people',$_POST);

        header('location:/view');
    }

}