<?php

namespace App\Http\Controllers;

use App\FormSite;
use App\PersonConfig\PersonField;
use App\Services\RepositoryFormSite;
use Illuminate\Http\Request;


class EditSystemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $dataInputs = FormSite::all();
        $personField = new PersonField();
        
        return view('dashboard.editAbaixoAssinado', [
            'dataInputs' => $dataInputs,
            'typesInput' => $personField->getTypesInput()
        ]);
    }

    public function editFormSite(Request $request){
        if(!$request->has('item'))
            return redirect()
                ->route('dashboard.home')
                ->withErrors([ "Houve um erro no lançamento da campanha. 
                Nenhum dado foi enviado!"]);

        $repository = new RepositoryFormSite();
        $transaction = $repository->newFormSite($request->all()['item']);

        if(!$transaction['ok'])
            return redirect()
                ->route('dashboard.home')
                ->withErrors([$transaction['error']]);

        // return redirect()->route('dashboard.home');
    }
}
