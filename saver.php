<?php
require 'generator.php';

class Saver
{
    public static function create() {
        $long_link = $_POST['link'];
        $short_link = LinkGenerator::gen();
        $data = $long_link.';'.$short_link.PHP_EOL;
        file_put_contents('links.csv', $data, FILE_APPEND | LOCK_EX);
        return $short_link;
    }
}