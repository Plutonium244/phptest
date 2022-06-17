<?php

class ViewCounter
{
    public static function count() {
        $unique_links = [];
        $file = fopen('links.csv', 'r');
        $text = file_get_contents("views.txt");
        while (!feof($file)) {
            $line = fgets($file);
            if (!empty($line)){
                $exploded_data = explode(';', $line);
                $short_link = substr($exploded_data[1],0,-2);
                array_push($unique_links, array($exploded_data[0], $short_link, substr_count($text, $short_link)));
            }
        }
        fclose($file);

        return $unique_links;
    }
}