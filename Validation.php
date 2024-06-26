<?php
class Validation
{
   

    public static function string($string,$min,$max)
    {
        $strLen = strlen(trim($string));

        return $strLen >= $min && $string <= $max;
        
        
    }

   
}
