<?php
/**
 * Created by PhpStorm.
 * User: faramarz
 * Date: 3/7/17
 * Time: 12:54
 */

namespace PersianToolkit;


class PersianToolkit
{
    /**
     * @param string $input
     * @return string
     */
    public static function arabic2Persian(string $input): string
    {
        $arabic = ['ي', 'ك'];
        $persian = ['ی', 'ک'];
        return str_replace($arabic, $persian, $input);
    }
}