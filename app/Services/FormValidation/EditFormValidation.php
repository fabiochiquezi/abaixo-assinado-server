<?php

namespace App\Services\FormValidation;

class EditFormValidation{
    private $errors = [];

    public function valid($inputs){
        if($this->verifyForbiddenNames($inputs)) 
            array_push($this->errors, 'Os nomes de inputs "nome", "e-mail", "e_mail", "whatsapp" são proibidos');
        
        if($this->repeatNomeInput($inputs)) 
            array_push($this->errors, 'O nome dos inputs não podem ser repetidos');

        if(count($this->errors)){
            return [
                'ok' => false,
                'errors' => $this->errors
            ];
        }

        return ['ok' => true];
    }

    public function verifyForbiddenNames($inputs){
        $erro = false;
        
        foreach($inputs as $input){
            if( 
                $input['nomeInput'] == 'nome' || 
                $input['nomeInput'] == 'e-mail' || 
                $input['nomeInput'] == 'e_mail' || 
                $input['nomeInput'] == 'whatsapp'
            ){
                $erro = true;
            }
        }

        return $erro;
    }

    private function repeatNomeInput($inputs){
        $arr = [];
        
        foreach($inputs as $input){
            array_push($arr, $input['nomeInput']);
        }

        $repeat = $this->getDuplicates($arr);

        if($repeat) return true;
        return false;
    }

    private function getDuplicates( $array ) {
        return array_unique( array_diff_assoc( $array, array_unique( $array ) ) );
    }
}