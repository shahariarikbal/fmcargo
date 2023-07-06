<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repository\CargoEcommerce;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    protected $brand;

    public function __construct(CargoEcommerce $cargoEcommerce)
    {
        $this->brand = $cargoEcommerce;
    }

    public function brandList(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('layouts.admin.ecommerce.brand.index', [
            'brands' => $this->brand->getAllData()
        ]);
    }

    public function brandCreate(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('layouts.admin.ecommerce.brand.add');
    }

    public function brandStore(Request $request)
    {
        try {
            $brand = $request->only(['name','name_bn']);
            $this->brand->store($brand);
            $this->setSuccessMessage('Brand has been created.');
            return redirect()->route('brand.list');
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->route('brand.list');
        }
    }

    public function brandUpdate(Request $request, $id)
    {
        try {
            $brandUpdate = $request->all();
            $this->brand->update($brandUpdate, $id);
            $this->setSuccessMessage('Brand has been updated.');
            return redirect()->route('brand.list');
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->route('brand.list');
        }
    }

    public function brandEdit($id)
    {
        $brand = $this->brand->edit($id);
        return view('layouts.admin.ecommerce.brand.edit', compact('brand'));
    }

    public function brandActive($id)
    {
        try {
            $brand = $this->brand->active($id);
            $this->setSuccessMessage('Brand has been inactive.');
            return redirect()->route('brand.list');
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->route('brand.list');
        }
    }

    public function brandInactive($id)
    {
        try {
            $brand = $this->brand->inactive($id);
            $this->setSuccessMessage('Brand has been active.');
            return redirect()->route('brand.list');
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->route('brand.list');
        }
    }

    public function brandDelete($id)
    {
        $brand = $this->brand->delete($id);
        $this->setSuccessMessage('Brand has been deleted.');
        return redirect()->route('brand.list');
    }
}
