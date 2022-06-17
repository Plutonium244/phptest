<?php

class Redirector
{
    public static function getRedirectLink($link) {
        $file = fopen('links.csv', 'r');
        while (!feof($file)) {
            $line = fgets($file);
            if (stripos($line, $link) !== false) {
                $redirect_data = explode(';', $line);
                fclose($file);
                return $redirect_data[0];
            }
        }
        fclose($file);
        return false;
    }
    public static function Redirect($url, $permanent = false)
    {
        if (headers_sent() === false)
        {
            header('Location: ' . $url, true, ($permanent === true) ? 301 : 302);
        }
        exit();
    }

    public static function count ($row) {
        file_put_contents('views.txt', $row.';', FILE_APPEND | LOCK_EX);
    }
}