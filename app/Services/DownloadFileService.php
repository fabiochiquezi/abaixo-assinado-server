<?php

namespace App\Services;

class DownloadFileService{
    private $nameFileCsv = "file.csv";
    private $directoryCsv = __DIR__ . "/../../storage/csv/";
    
    public function csv(){

        $file = ($this->directoryCsv . $this->nameFileCsv);
 
        $filetype=filetype($file);
        $filename=basename($file);
 
        header ("Content-Type: ".$filetype);
        header ("Content-Length: ".filesize($file));
        header ("Content-Disposition: attachment; filename=".$filename);
 
        readfile($file);
    }
}