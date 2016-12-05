<?php

require './vendor/autoload.php';

require './Core/bootstrap.php';


/*
 * localhost:8888/aaaa/sdsss/ddf?333
 * just select aaaa/sdsss/ddf
 * it will be defeined as controller to process user request
 */
$uri = trim(parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH),'/');

// find POST or GET
$method = $_SERVER['REQUEST_METHOD'];

Router::load('./Controller/controllers.php')->direct($uri,$method);



