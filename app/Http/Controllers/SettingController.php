<?php

namespace App\Http\Controllers;
use App\Repository\CargoEcommerce;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    protected $setting;

    public function __construct(CargoEcommerce $cargoEcommerce)
    {
        $this->setting = $cargoEcommerce;
    }

    public function showSetting ($id)
    {
        $setting = $this->setting->edit($id);
        //dd($setting);
        return view('layouts.admin.ecommerce.setting.show', compact('setting'));
    }

    public function updateSetting (Request $request, $id)
    {
        try {
            $setting = $request->all();
            $this->setting->update($setting, $id);
            $this->setSuccessMessage('Setting has been updated.');
            return redirect()->back();
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->back();
        }
    }
}
