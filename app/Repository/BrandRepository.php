<?php

namespace App\Repository;

use App\Models\Brand;
use Illuminate\Support\Str;

class BrandRepository implements CargoEcommerce
{
    public function getAllData()
    {
        return Brand::orderBy('id', 'desc')->select(['id', 'name', 'slug', 'status'])->get();
    }

    public function store($data = [])
    {
        Brand::create([
            'name' => $data['name'],
            'slug' => Str::slug($data['name']),
        ]);
    }

    public function update($data = [], $id = [])
    {
       $brand = Brand::find($id);
        $brand->update([
            'name' => $data['name'],
            'slug' => Str::slug($data['name']),
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
