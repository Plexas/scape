<?php


namespace Plexas\Scape;


class Scaper
{
    const REGEX_DEFAULT = "[^A-Za-z0-9.,:;\-_#'\"~*+?ß\\{}\[\]()&%\$§³²!^°|=µ]+";
    const REGEX_USERNAME = "[^A-Za-z0-9_.]+";
    const REGEX_EMAIL = "[^A-Za-z0-9.@äöü\-_!&%~*+]+";

    public function escape($string, $pattern = self::REGEX_DEFAULT)
    {
        return preg_filter($pattern, '', $string);
    }
}