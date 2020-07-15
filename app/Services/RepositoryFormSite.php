<?php

namespace app\Services;
use Illuminate\Support\Facades\DB;
use App\FormSite;
use App\Services\CreateStringQuery;
use App\Services\GeneralServices;
use DomainException;

class RepositoryFormSite{
    private string $newTableString = '';
    private array $dataBase = array(
        array(
            'nome' => 'Nome',
            'tipo' => 1,
            'placeholder' => 'Digite seu nome',
            'required' => 1
        ),
        array(
            'nome' => 'E-mail',
            'tipo' => 3,
            'placeholder' => 'Digite seu email',
            'required' => 1
        ),
        array(
            'nome' => 'Whatsapp',
            'tipo' => 1,
            'placeholder' => 'Digite seu whatsapp',
            'required' => 1
        )
    );

    public function newFormSite($request){
        DB::beginTransaction();
            FormSite::where('id', '>=', 0)->delete();

            try{
                $createString = new CreateStringQuery();

                if(count($request)){
                    foreach($request as $item){
                        array_push($this->dataBase, array(
                            'nome' => $item['nomeInput'],
                            'tipo' => $item['tipoInput'],
                            'placeholder' => $item['placeholderInput'],
                            'required' => $item['requiredInput']
                        ));

                        $this->newTableString = 
                            $this->newTableString . 
                            $createString->basic($item['nomeInput'], $item['tipoInput']) . 
                            ', ';
                    }
                }

                FormSite::insert($this->dataBase);
                $this->alterTableAbaixoAssinado($this->newTableString);
            }
            catch(DomainException $error){
                DB::rollBack(); 
                return [ 'ok' => false, 'error' =>  $error->getMessage() ];
            }
            
        DB::commit();
        return ['ok' => true];
    }

    private function alterTableAbaixoAssinado($newTableString){
        $newTableString = substr($newTableString, 0, -2);
        $queryStandard = "
            id INT AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(250) not null,
            e_mail VARCHAR(250) not null,
            whatsapp VARCHAR(13) not null";

        DB::statement('drop table if exists abaixo_assinado');
        
        if($newTableString){
            DB::statement("create table if not exists abaixo_assinado ({$queryStandard}, {$newTableString})");
            return;
        }

        DB::statement("create table if not exists abaixo_assinado ({$queryStandard})");
    }
}