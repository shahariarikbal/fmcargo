<?php

namespace App\Repository;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductRepository implements CargoEcommerce
{

    public function getAllData()
    {
        return Product::orderBy('id', 'desc')->with('category', 'brand')->get();
    }

    public function store($data = [])
    {
        //dd($data);
            if($data['gallery_image']){
                foreach($data['gallery_image'] as $imagefile)
                {
                    $name = mt_rand(10000, 99999).'.'.$imagefile->extension();
                    $imagefile->move('product/', $name);
                    $gallery_image[] = $name;
                }
            }

           if(($data['image'])){
            $imgname = mt_rand(10000, 99999). '.' . $data['image']->getClientOriginalExtension();
            $data['image']->move('product/', $imgname);
        }

        Product::create([
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
            'gallery_image'=> json_encode($gallery_image),
        ]);
    }

    public function edit($id)
    {

    }

    public function update($id = [], $data = [])
    {

    }

    public function active($id)
    {

    }

    public function inactive($id)
    {

    }

    public function delete($id)
    {
        $product = Product::find($id);
        if ($product->image && file_exists(public_path('product/'.$product->image))){
            unlink(public_path('product/'.$product->image));
        }

        foreach (json_decode($product->gallery_image, true) as $image) {
            if ($product->image && file_exists(public_path('product/'.$image))){
                unlink(public_path('product/'.$image));
            }
        }
        $product->delete();
    }

}
