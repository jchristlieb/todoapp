<?php

namespace toDoApp\classes;

use mysql_xdevapi\Exception;

class Router
{
    public $routes = [];

    public static function load($file)
    {
        $router = new static;
        require $file;
        return $router;
    }

    public function define($routes)
    {
        $this->routes = $routes;
    }

    public function direct($uri)
    {
        if (array_key_exists($uri, $this->routes)) {

            return $this->routes[$uri];

        }

        die ('No route defined for this URI');

    }

}