<?php

namespace App\Http\Controllers;

use App\AbaixoAssinado;
use App\FormSite;
use App\Services\CsvServices;
use App\Services\DownloadFileService;
use App\Services\GeneralServices;
use Exception;
use Illuminate\Http\Request;

class DataTableController extends Controller
{
    private $quantityPagination = 10;

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $thead = FormSite::all();
        $tbody = AbaixoAssinado::paginate($this->quantityPagination);

        return view('dashboard.abaixoAssinado', [
            'thead' => $thead,
            'tbody' => $tbody
        ]);
    }

    public function csvGenerate(){        
        $tbody = AbaixoAssinado::all();
        $thead = FormSite::all();

        if(!count($tbody))
            return redirect()
                ->route('dashboard.dataTable')
                ->withErrors(['A tabela está vázia']);

        try{
            $csvService = new CsvServices();
            $csvService->generateCsv($thead, $tbody);
    
            $downloadFile = new DownloadFileService();
            $downloadFile->csv();
        }
        catch(Exception $error){
            return redirect()
                ->route('dashboard.dataTable')
                ->withErrors(['Houve um erro na geração do arquivo csv.']);
        }
    }

    public function cleanData(){
        try{
            AbaixoAssinado::where('id', '>=', 0)->delete();
            return redirect()
                ->route('dashboard.dataTable');
        }
        catch(Exception $error){
            return redirect()
                ->route('dashboard.dataTable')
                ->withErrors(['Houve um erro ao tentar deletar todos os dados.']);
        }
    }
}
