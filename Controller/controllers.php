<?php
// register  all  controllers

$router->get('','DefaultController@home');
$router->get('view','DefaultController@view');
$router->get('add','DefaultController@add');
$router->post('addAct','DefaultController@addAct');
