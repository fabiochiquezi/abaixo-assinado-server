<?php

namespace App\Services;

class CsvServices{
    private $file = __DIR__ . '/../../storage/csv/file.csv';

    public function generateCsv($thead, $tbody){
        $indices = [];

        $fp = fopen($this->file, 'w');
        
        // escreve o indice
        foreach ($thead as $th) {
            fwrite($fp, $th->nome . ';');
            array_push($indices, GeneralServices::replaceSpecialCharacters($th->nome) );
        }

        // quebra linha
        fwrite($fp,"\n");
        
        // escreve tabela com os dados
        foreach ($tbody as $fields) {
            foreach($indices as $tr){
                fwrite($fp, $fields[$tr] . ';');
            }
            fwrite($fp, "\n");
        }
        
        fclose($fp);
    }
}