<?php

namespace App\Repository;
use App\Models\Setting;
use Illuminate\Support\Str;

class SettingRepository implements CargoEcommerce
{

    public function getAllData()
    {

    }

    public function store($data = [])
    {

    }

    public function edit($id)
    {
        return $setting = Setting::first();
    }

    public function update($data = [], $id = [])
    {
        $setting = Setting::find($id);

        if(isset($data['logo'])){
            if ($setting->logo && file_exists(public_path('setting/'.$setting->logo))){
                unlink(public_path('setting/'.$setting->logo));
            }
            $imgname = mt_rand(10000, 99999). '.' . $data['logo']->getClientOriginalExtension();
            $data['logo']->move('setting/', $imgname);
        }
        else{
            $imgname = $setting->logo;
        }

        $setting->update([
            'email' => $data['email'],
            'phone' => $data['phone'],
            'facebook' => $data['facebook'],
            'whatsapp' => $data['whatsapp'],
            'wechat' => $data['wechat'],
            'address_en' => $data['address_en'],
            'address_bn' => $data['address_bn'],
            'footer_description_en' => $data['footer_description_en'],
            'footer_description_bn' => $data['footer_description_bn'],
            'logo' => $imgname,
        ]);
    }

    public function active($id)
    {

    }

    public function inactive($id)
    {

    }

    public function delete($id)
    {

    }

}
