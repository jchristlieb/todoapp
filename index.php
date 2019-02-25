<?php

require 'vendor/autoload.php';
use toDoApp\classes\Router;
use toDoApp\classes\Request;

$pdo = require 'src/bootstrap.php';

require Router::load('routes.php')
    ->direct(Request::uri());














