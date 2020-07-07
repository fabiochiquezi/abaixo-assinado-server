<?php

namespace app\Services;
use Illuminate\Support\Facades\DB;
use App\FormSite;
use App\Services\CreateStringQuery;
use App\Services\GeneralServices;
use DomainException;

class RepositoryFormSite{

    public function newFormSite($request){
        $newTableString = '';

        DB::connection()->enableQueryLog();

        DB::beginTransaction();
            FormSite::where('id', '>=', 0)->delete();

            $nomeStandardForm = new FormSite();
            $nomeStandardForm->nome = 'Nome';
            $nomeStandardForm->tipo = 1;
            $nomeStandardForm->placeholder = 'Digite seu nome';
            $nomeStandardForm->save();

            $emailStandardForm = new FormSite();
            $emailStandardForm->nome = 'E-mail';
            $emailStandardForm->tipo = 3;
            $emailStandardForm->placeholder = 'Digite seu email';
            $emailStandardForm->save();

            $whatsappStandardForm = new FormSite();
            $whatsappStandardForm->nome = 'Whatsapp';
            $whatsappStandardForm->tipo = 1;
            $whatsappStandardForm->placeholder = 'Digite seu whatsapp';
            $whatsappStandardForm->save();

            try{
                $createString = new CreateStringQuery();

                foreach($request as $item){
                    $newItem = new FormSite();
                    $newItem->nome = $item['nomeInput'];
                    $newItem->tipo = $item['tipoInput'];
                    $newItem->placeholder = $item['placeholderInput'];
                    $newItem->save();

                    $newTableString = 
                        $newTableString . $createString->basic(
                            $item['nomeInput'],
                            $item['tipoInput']
                    ) . ', ';
                }

                $this->alterTableAbaixoAssinado($newTableString);
            }
            catch(DomainException $error){
                DB::rollBack(); 
                return [
                    'ok' => false,
                    'error' =>  $error->getMessage()
                ];
            }
            
        DB::commit();

        $queries = DB::getQueryLog();
        echo "<pre>";
        print_r($queries);

        return ['ok' => true];
    }

    private function alterTableAbaixoAssinado($newTableString){
        $newTableString = GeneralServices::substring2Last($newTableString);

        DB::statement('drop table if exists abaixo_assinado');
        DB::statement(
            "create table if not exists abaixo_assinado (
                id INT AUTO_INCREMENT PRIMARY KEY,
                nome VARCHAR(250) not null,
                email VARCHAR(250) not null,
                whatsapp VARCHAR(13) not null,
                {$newTableString}
            )"
        );
    }
}