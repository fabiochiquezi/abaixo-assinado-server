<?php

namespace App\Services;

use App\PersonConfig\PersonField;
use App\Services\GeneralServices;

class CreateStringQuery{
    public function basic($name, $type){
        $name = GeneralServices::replaceSpecialCharacters($name);
        $typesDB = new PersonField();

        $string = '';
        $string = $string . $name . ' ' . $typesDB->getTypesDB()[$type];

        return $string;
    }
}