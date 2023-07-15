<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SpecializedServiceRequest;
use App\Repository\CargoEcommerce;

use Illuminate\Http\Request;
class SpecializedServiceController extends Controller
{
    protected $specialized_service;


    public function __construct(CargoEcommerce $cargoEcommerce)
    {
        $this->specialized_service = $cargoEcommerce;
    }

    public function specializedEdit ($id)
    {
        $specialized_service = $this->specialized_service->edit($id);
        return view('layouts.admin.specialized_service.index', compact('specialized_service'));
    }

    public function specializedUpdate ( SpecializedServiceRequest $request, $id)
    {
        try {
            $specialized_service = $request->all();
            $this->specialized_service->update($specialized_service, $id);
            $this->setSuccessMessage('Content has been updated.');
            return redirect()->route('specialized.edit',$id);
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->route('specialized.edit',$id);
        }
    }
}
