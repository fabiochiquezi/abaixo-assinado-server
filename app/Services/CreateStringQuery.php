<?php

namespace App\Services;

use App\PersonConfig\PersonField;
use App\Services\GeneralServices;
use DomainException;

class CreateStringQuery{

    public function basic($name, $type){
        if(!$name) throw new DomainException('O atributo "Input" é obrigatório, não deve ser enviado vázio');
        if(is_numeric($name)) throw new DomainException('O atributo nome é deve ser do tipo texto somente.');
        
        $name = GeneralServices::replaceSpecialCharacters($name);
        $typesDB = new PersonField();

        $string = '';
        $string = $string . $name . ' ' . $typesDB->getTypesDB()[$type];

        return $string;
    }
    
}