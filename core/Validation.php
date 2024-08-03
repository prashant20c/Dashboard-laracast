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
}
