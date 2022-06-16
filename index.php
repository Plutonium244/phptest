<?php
print_r($_SERVER['REQUEST_URI']);
require_once 'router.php';
Router::parse($_SERVER['REQUEST_URI']);

?>