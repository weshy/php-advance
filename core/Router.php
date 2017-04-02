<?php

class Router
{
    protected static $routes;

    public static function init($fileName='web')
    {
        static::$routes =  require_once __DIR__."/{$fileName}.php";

        return new static;
    }

    public function getPage()
    {
        $path = Request::getPath();

        if(array_key_exists($path, static::$routes)) {
            return static::$routes[$path];
        }else{
            header('HTTP/1.1 404 Not Found');
            return "views/errors/404.php";
        }
    }
}