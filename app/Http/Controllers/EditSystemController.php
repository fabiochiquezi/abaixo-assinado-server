<?php

namespace App\Http\Controllers;

use App\FormSite;
use App\PersonConfig\PersonField;
use App\Services\RepositoryFormSite;
use Illuminate\Http\Request;
use Mockery\Undefined;

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
            'typesInput' => $personField->getTypesInput(),
            'typesRequired' => $personField->getRequiredTypes()
        ]);
    }

    public function editForm()
    {
        $dataInputs = FormSite::all();
        $personField = new PersonField();
        
        return view('dashboard.editAbaixoAssinadoForm', [
            'dataInputs' => $dataInputs,
            'typesInput' => $personField->getTypesInput()
        ]);
    }

    public function editFormSite(Request $request){
        $itens = empty($request->all()['item']) ? [] : $request->all()['item'];
        
        $repository = new RepositoryFormSite();
        $transaction = $repository->newFormSite($itens);

        if(!$transaction['ok'])
            return redirect()
                ->route('dashboard.editForm-site')
                ->withErrors([$transaction['error']]);

        return redirect()->route('dashboard.editForm');
    }
}
