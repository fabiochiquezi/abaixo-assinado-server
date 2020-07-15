<?php

namespace App\PersonConfig;

class PersonField{
    private $typesInput =   ['texto', 'simples', 'numero', 'email'];
    private $types =        ['textarea', 'text', 'number', 'email'];
    private $typesDB =      ['TEXT', 'VARCHAR(250)', 'INT', 'VARCHAR(250)'];
    private $required =     ['não', 'sim'];

    public function getTypes(){
        return $this->types;
    }

    public function getTypesInput(){
        return $this->typesInput;
    }

    public function getTypesDB(){
        return $this->typesDB;
    }

    public function getRequiredTypes(){
        return $this->required;
    }
}
