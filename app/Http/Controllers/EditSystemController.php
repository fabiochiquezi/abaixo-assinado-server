<?php

namespace App\Http\Controllers;

use App\FormSite;
use App\PersonConfig\PersonField;
use App\Services\FormValidation\EditFormValidation;
use App\Services\RepositoryFormSite;
use App\Services\RepositorySiteData;
use App\SiteData;
use Illuminate\Http\Request;
use Exception;
use Illuminate\Support\Facades\Route;

class EditSystemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $view = Route::current()->getName() == 'dashboard.editForm' ? 
        'dashboard.editAbaixoAssinado' : 'dashboard.editAbaixoAssinadoForm';

        $dataInputs = FormSite::all();
        $personField = new PersonField();
        $siteData = SiteData::all()->first();;
        
        return view("$view", [
            'dataInputs' => $dataInputs,
            'typesInput' => $personField->getTypesInput(),
            'typesRequired' => $personField->getRequiredTypes(),
            'siteData' => $siteData
        ]);
    }

    public function editFormSite(Request $request){
        // debug
        $itens = empty($request->all()['item']) ? [] : $request->all()['item'];
        
        $formValidation = new EditFormValidation();
        $validation = $formValidation->valid($itens);

        if(!$validation['ok'])
            return redirect()
                ->route('dashboard.editForm-site')
                ->withErrors([$validation['errors']]);
        
        $repository = new RepositoryFormSite();
        $transaction = $repository->newFormSite($itens);

        if(!$transaction['ok'])
            return redirect()
                ->route('dashboard.editForm-site')
                ->withErrors([$transaction['error']]);

        return redirect()->route('dashboard.editForm');
    }

    public function editSite(Request $request){
        try{
            $repository = new RepositorySiteData();
            $repository->save($request);
            return redirect()->route('dashboard.editForm');
        }
        catch(Exception $error){
            return redirect()->route('dashboard.editForm')->withErrors('não foi possível cadastrar as novas informações');
        }
    }
}
