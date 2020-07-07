<?php

namespace App\Services;

class GeneralValidation{

    public static function isEmpty($item, string $nameField){
        if( empty($item[$nameField])) return true;
        return false;
    }
    
}