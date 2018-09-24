<?php
/**
 * Created by PhpStorm.
 * User: oskargunther
 * Date: 24.09.2018
 * Time: 12:24
 */

namespace Mailer\Helper;


class FilenameParser
{
    static public function parseFilename($string)
    {
        $replace = ['ą' => 'a', 'ę' => 'e', 'ś' => 's', 'ć' => 'c', 'ó' => 'o', 'ń' => 'n', 'ż' => 'z',
            'ź' => 'z', 'ł' => 'l', 'Ą' => 'A', 'Ę' => 'E', 'Ś' => 'S', 'Ć' => 'C', 'Ó' => 'O',
            'Ń' => 'N', 'Ż' => 'Z', 'Ź' => 'Z', 'Ł' => 'L'];
        $string = str_replace(array_keys($replace), array_values($replace), $string);
        $string = preg_replace('/([^\w\s-_\.])/','',$string);

        if(!preg_match('/^[\w\s-_]+\.[A-Za-z0-9]+$/',$string)) {
            throw new \Exception('Unable to parse filename');
        }

        return $string;
    }
}