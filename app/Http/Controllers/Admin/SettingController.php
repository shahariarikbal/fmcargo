<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repository\CargoEcommerce;
use App\Models\User;

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
            $whatsapp = $setting['whatsapp'];
            if (substr($whatsapp, 0, 1) === "0") {
                $whatsapp = substr($whatsapp, 1);
                $setting['whatsapp'] = $whatsapp;
            }
            $this->setting->update($setting, $id);
            $this->setSuccessMessage('Setting has been updated.');
            return redirect()->back();
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->back();
        }
    }

    public function editCredential ()
    {
        $credential = User::first();
        return view('layouts.admin.ecommerce.setting.credential-show', compact('credential'));
    }

    public function updateCredential (Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'old_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required',
        ]);
        $admin = User::first();
        if(isset($request->new_password)){
            if (password_verify($request->old_password, $admin->password)){
                if($request->new_password==$request->confirm_password){
                    $admin->password=bcrypt($request->new_password);
                    $admin->email=$request->email;
                    $admin->update();
                    return redirect()->back()->with('success', 'Updated Successfully');
                }
                else{
                    return redirect()->back()->with('error', 'Confirm Password is not Matched!!');
                }
            }
            else{
                return redirect()->back()->with('error', 'Old Password does not Match!!');
            }
        }
        else{
            $admin->email=$request->email;
            $admin->update();
            return redirect()->back()->with('success', 'Updated Successfully');
        }
    }
}
