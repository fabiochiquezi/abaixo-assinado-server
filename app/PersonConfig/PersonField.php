<?php

namespace App\PersonConfig;

class PersonField{
    private $typesInput =   ['texto', 'texto simples', 'numero', 'email'];
    private $typesDB =      ['TEXT', 'VARCHAR(250)', 'INT', 'VARCHAR(250)'];

    public function getTypesInput(){
        return $this->typesInput;
    }

    public function getTypesDB(){
        return $this->typesDB;
    }
}
