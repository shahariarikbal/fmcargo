<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repository\CargoEcommerce;
use Illuminate\Http\Request;
use App\Http\Requests\ServiceRequest;
use Illuminate\View\View;

class ServiceController extends Controller
{
    protected $service;

    public function __construct(CargoEcommerce $cargoEcommerce)
    {
        $this->service = $cargoEcommerce;
    }

    public function serviceList() : View
    {
        return view('layouts.admin.service.index', [
            'services' => $this->service->getAllData()
        ]);
    }

    public function serviceAdd()
    {
        return view('layouts.admin.service.add');
    }

    public function serviceStore(ServiceRequest $request)
    {
        try {
            $service = $request->only(['title','image']);
            $this->service->store($service);
            $this->setSuccessMessage('Service has been created.');
            return redirect()->route('services');
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->back();
        }
    }

    public function serviceEdit($id)
    {
        $service = $this->service->edit($id);
        return view('layouts.admin.service.edit', compact('service'));
    }

    public function serviceUpdate(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
        ]);

        try {
            $service = $request->all();
            $this->service->update($service, $id);
            $this->setSuccessMessage('Service has been updated.');
            return redirect()->route('services');
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->back();
        }
    }

    public function serviceDelete(Request $request, $id)
    {
        $service = $this->service->delete($id);
        $this->setSuccessMessage('Service has been deleted.');
        return redirect()->route('services');
    }
}
