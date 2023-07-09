<?php

namespace App\Repository;

use App\Models\Category;
use Illuminate\Support\Str;

class EcommerceRepository implements CargoEcommerce
{
    public function getAllData()
    {
        $categories = Category::orderBy('id', 'desc')->select(['id', 'name_en','name_bn' ,'slug', 'status'])->get();
        return $categories;
    }

    public function store($data = [])
    {
        $category = new Category();
        $category->name_en = $data['name_en'];
        $category->name_bn = $data['name_bn'];
        $category->slug = Str::slug($data['name_en']);
        $category->save();
    }

    public function update($data = [], $id = [])
    {
        //dd($data);
        $category = Category::find($id);
        $category->name_en = $data['name_en'];
        $category->name_bn = $data['name_bn'];
        $category->slug = Str::slug($data['name_en']);
        $category->save();
    }

    public function edit($id)
    {
       return $category = Category::find($id);
    }

    public function active($id)
    {
        $category = Category::find($id);
        $category->status = 0;
        $category->save();
    }

    public function inactive($id)
    {
        $category = Category::find($id);
        $category->status = 1;
        $category->save();
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
    }
}
