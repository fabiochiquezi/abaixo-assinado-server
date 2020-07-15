<?php

namespace App\Http\Controllers;

use App\AbaixoAssinado;
use App\FormSite;
use App\PersonConfig\PersonField;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function index(){
        $formFields = FormSite::all();
        $personField = new PersonField();

        return view('site.home', [
            'formFields' => $formFields,
            'personField' => $personField->getTypes()
        ]);
    }

    public function store(Request $request){
        try{
            $abaixoAssinado = new AbaixoAssinado();
    
            foreach($request->all() as $key => $item){
                if($key !== '_token') $abaixoAssinado->$key = $item;
            }
    
            $abaixoAssinado->save();

            return view('site.successForm');
        }
        catch(Exception $error){
            // echo $error->getMessage();
            return view('site.failForm');
        }
    }
}
