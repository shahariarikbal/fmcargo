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
            if(isset($data['gallery_image'])){
                foreach($data['gallery_image'] as $imagefile)
                {
                    $name = mt_rand(10000, 99999).'.'.$imagefile->extension();
                    $imagefile->move('product/', $name);
                    $gallery_image[] = $name;
                }
            }

           if(isset($data['image'])){
                $imgname = mt_rand(10000, 99999). '.' . $data['image']->getClientOriginalExtension();
                $data['image']->move('product/', $imgname);
            }

        Product::create([
            'name_en' => $data['name_en'],
            'name_bn' => $data['name_bn'],
            'slug' => Str::slug($data['name_en']),
            'sku' => $data['sku'],
            'cat_id' => $data['cat_id'],
            'brand_id' => $data['brand_id'],
            'price_en' => $data['price_en'],
            'price_bn' => $data['price_bn'],
            'qty_en' => $data['qty_en'],
            'qty_bn' => $data['qty_bn'],
            'short_description_en' => $data['short_description_en'],
            'short_description_bn' => $data['short_description_bn'],
            'long_description_en' => $data['long_description_en'],
            'long_description_bn' => $data['long_description_bn'],
            'image' => $imgname,
            'gallery_image'=> json_encode($gallery_image),
        ]);
    }

    public function edit($id)
    {
        return $product = Product::where('id', $id)->with('brand', 'category')->first();
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
            'name_en' => $data['name_en'],
            'name_bn' => $data['name_bn'],
            'slug' => Str::slug($data['name_en']),
            'sku' => $data['sku'],
            'cat_id' => $data['cat_id'],
            'brand_id' => $data['brand_id'],
            'price_en' => $data['price_en'],
            'price_bn' => $data['price_bn'],
            'qty_en' => $data['qty_en'],
            'qty_bn' => $data['qty_bn'],
            'short_description_en' => $data['short_description_en'],
            'short_description_bn' => $data['short_description_bn'],
            'long_description_en' => $data['long_description_en'],
            'long_description_bn' => $data['long_description_bn'],
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
