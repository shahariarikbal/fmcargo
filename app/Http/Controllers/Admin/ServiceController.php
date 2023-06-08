<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repository\CargoEcommerce;
use Illuminate\Http\Request;
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

    }

    public function serviceStore(Request $request)
    {

    }

    public function serviceEdit($id)
    {

    }

    public function serviceUpdate(Request $request, $id)
    {

    }

    public function serviceDelete(Request $request, $id)
    {

    }
}
