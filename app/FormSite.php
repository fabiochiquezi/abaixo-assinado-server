<?php

namespace App;

use DomainException;
use Illuminate\Database\Eloquent\Model;

class FormSite extends Model
{
    protected $table = 'form_site';

    public function setNomeAttribute(?string $value){
        if(!$value) throw new DomainException('O atributo nome não pode ser vázio.');
        $this->attributes['nome'] = $value;
    }
    
}