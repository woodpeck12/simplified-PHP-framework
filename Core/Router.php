<?php

class Router
{
    //store all controller into array
    public $routes = [
        'GET' => [],
        'POST' => []
    ];

    public  static function load($controllers){
        $router = new self();
        require $controllers;
        return $router;
    }

    public function get($uri,$controller){
        $this->routes['GET'][$uri] = $controller;
    }

    public function post($uri,$controller){
        $this->routes['POST'][$uri] = $controller;
    }

    public function direct($uri,$method)
    {
        if (array_key_exists($uri, $this->routes[$method])) {
            $this->gotoController(...explode('@', $this->routes[$method][$uri]));

        } else {
            ErrorHandle::errorProcess('Cannot find controller '.$uri);
            die();
        }
    }

    public function gotoController($controller,$action){

        $controller = new $controller;

        if(! method_exists($controller,$action)){
            ErrorHandle::errorProcess('Cannot find action '.$action);
            echo('cannot find action');
            die();
        }
        else {
            $controller->$action();
        }

    }

}