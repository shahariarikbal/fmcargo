<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repository\CargoEcommerce;
use Illuminate\Http\Request;
use App\Http\Requests\ClearingForwardingRequest;

class ClearingForwardingController extends Controller
{
    protected $clearing_forwarding;


    public function __construct(CargoEcommerce $cargoEcommerce)
    {
        $this->clearing_forwarding = $cargoEcommerce;
    }

    public function cfEdit ($id)
    {
        $clear_forwarding = $this->clearing_forwarding->edit($id);
        return view('layouts.admin.cf.index', compact('clear_forwarding'));
    }

    public function cfUpdate (ClearingForwardingRequest $request, $id)
    {
        try {
            $clearing_forwarding = $request->all();
            $this->clearing_forwarding->update($clearing_forwarding, $id);
            $this->setSuccessMessage('Content has been updated.');
            return redirect()->route('c_&_f.edit',$id);
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->route('c_&_f.edit',$id);
        }
    }
}
