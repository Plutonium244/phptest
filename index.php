<?php
// print_r($_SERVER['REQUEST_URI']);

if (!file_exists('links.csv')){
    file_put_contents('links.csv', '');
}

if (!file_exists('views.txt')){
    file_put_contents('views.txt', '');
}

require_once 'router.php';
Router::parse($_SERVER['REQUEST_URI']);

?>