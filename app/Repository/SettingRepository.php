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
        $product = Product::find($id);
        $images = json_decode($product->gallery_image, true);
            if(isset($data['gallery_image'])){
            foreach($data['gallery_image'] as $imagefile)
            {
                $name = mt_rand(10000, 99999).'.'.$imagefile->extension();
                $imagefile->move('product/', $name);
                $images[] = $name;
            }
        }

        if(isset($data['image'])){
            if ($product->image && file_exists(public_path('product/'.$product->image))){
                unlink(public_path('product/'.$product->image));
            }
            $imgname = mt_rand(10000, 99999). '.' . $data['image']->getClientOriginalExtension();
            $data['image']->move('product/', $imgname);
        }
        else{
            $imgname = $product->image;
        }

        $product->update([
            'name' => $data['name'],
            'slug' => Str::slug($data['name']),
            'sku' => $data['sku'],
            'cat_id' => $data['cat_id'],
            'brand_id' => $data['brand_id'],
            'price' => $data['price'],
            'qty' => $data['qty'],
            'short_description' => $data['short_description'],
            'long_description' => $data['long_description'],
            'image' => $imgname,
            'gallery_image'=> json_encode($images),
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
