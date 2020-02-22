<?php


namespace Plexas\Scape;


class Scaper
{
    const ESCAPE_REGEX_DEFAULT = "/<[^>]*>/";

    public static function escape($string, $pattern = self::ESCAPE_REGEX_DEFAULT)
    {
        return preg_replace($pattern, '', $string);
    }
}