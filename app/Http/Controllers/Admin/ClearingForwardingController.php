<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repository\CargoEcommerce;
use Illuminate\Http\Request;

class ClearingForwardingController extends Controller
{
    protected $clearing_forwarding;


    public function __construct(CargoEcommerce $cargoEcommerce)
    {
        $this->clearing_forwarding = $cargoEcommerce;
    }

    public function cfList ():View
    {
        return view('layouts.admin.cf.index', [
            'clear_forwarding' => $this->clearing_forwarding->getAllData()
        ]);
    }
}
