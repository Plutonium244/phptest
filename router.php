<?php 

class Router 
{
    public static function parse($params)
        {
            $output = json_encode(explode('/', $params));
            $route_parts = (explode('/', $params));
            if (empty($route_parts[2])) { // Стартовая страница
                require 'views/index.html';
            } elseif (($route_parts[2]) == 'post') { // Это для сохранения короткой ссылки
                require 'saver.php';
                $short_link = Saver::create();
                echo json_encode(
                    "http://".
                    $_SERVER['HTTP_HOST'].
                    substr($_SERVER['REQUEST_URI'], 0, -4). // отрезать от текущего URL-а post
                    $short_link);
                return true;
                // return json_encode($short_link);
            } else { // Это для учёта нажатия на ссылку
                require 'redirector.php';
                $link = Redirector::getRedirectLink($route_parts[2]);
                if ($link) {
                    Redirector::count($route_parts[2]);
                    Redirector::redirect($link, false);
                } else {
                    print_r('Ссылка '.$route_parts[2].' не найдена в системе');
                }
            }
        }
}