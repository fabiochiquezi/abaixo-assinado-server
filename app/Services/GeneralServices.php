<?php

namespace App\Services;

class GeneralServices{

    public static function replaceSpecialCharacters(string $val){
        return preg_replace('/[^a-z0-9]/i', '_', $val);
    }

    public static function substring2Last($val){
        return substr($val, 0, -2);
    }
}