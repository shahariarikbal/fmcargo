<?php

namespace App\Repository;

use App\Models\Brand;
use Illuminate\Support\Str;

class BrandRepository implements CargoEcommerce
{
    public function getAllData()
    {
        return Brand::orderBy('id', 'desc')->select(['id', 'name_en', 'slug', 'status'])->get();
    }

    public function store($data = [])
    {
        Brand::create([
            'name_en' => $data['name_en'],
            'name_bn' => $data['name_bn'],
            'slug' => Str::slug($data['name_en']),
        ]);
    }

    public function update($data = [], $id = [])
    {
       $brand = Brand::find($id);
        $brand->update([
            'name_en' => $data['name_en'],
            'name_bn' => $data['name_bn'],
            'slug' => Str::slug($data['name_en']),
        ]);
    }

    public function edit($id)
    {
        return $brand = Brand::find($id);
    }

    public function delete($id)
    {
        $brand = Brand::find($id);
        $brand->delete();
    }

    public function active($id)
    {
        $brand = Brand::find($id);
        $brand->status = 0;
        $brand->save();
    }

    public function inactive($id)
    {
        $brand = Brand::find($id);
        $brand->status = 1;
        $brand->save();
    }
}
