<?php

namespace App\Http\Controllers;

use App\AbaixoAssinado;
use App\FormSite;
use App\Services\CsvServices;
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

        $list = array (
            array('aaa', 'bbb', 'ccc', 'dddd'),
            array('123', '456', '789'),
            array('"aaa"', '"bbb"')
        );
        
        // $fp = fopen('file.csv', 'w');
        $fp = fopen('file.csv', 'w');
        
        foreach ($list as $fields) {
            fputcsv($fp, $fields);
        }
        
        fclose($fp);

        return 'ko';
    }
}
