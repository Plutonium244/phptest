<?php

class LinkGenerator
{
    public static function gen () {
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $short_link = substr(str_shuffle($permitted_chars), 0, 5);
        if (self::isUnique($short_link)){
            return $short_link;
        } else {
            $short_link = self::gen();
            return $short_link;
        }
    }

    private static function isUnique($link) {
        if (strpos(file_get_contents("links.csv"), $link) === false){
            return true;
        }
        return false;
    }
}