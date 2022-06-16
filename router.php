<?php 

class Router 
{
    public static function parse($regex)
        {
            $params = $_SERVER['REQUEST_URI'];
            $output = json_encode(explode('/', $params));
            $route_parts = (explode('/', $params));
            if (empty($route_parts[2])) { // Стартовая страница
                require 'views/index.html';
            } elseif (($route_parts[2]) == 'post') { // Это для сохранения короткой ссылки
                require 'saver.php';
            } else { // Это для учёта нажатия на ссылку
                require 'redirector.php';
            }
        }
}