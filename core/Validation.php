<?php

namespace core;

class Validation
{

    public static function string($string, $min, $max)
    {
        $strLen = strlen(trim($string));

        return $strLen >= $min && $strLen <= $max;
    }


    public static function email($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }


    public static function password($password)
    {
        $pattern = '/^(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*(),.?":{}|<>]).+$/';
        return filter_var($password, FILTER_VALIDATE_REGEXP, ["options" => ["regexp" => $pattern]]);
    }


}