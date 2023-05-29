<?php

namespace App\Repository;
use App\Models\Product;

class ProductRepository implements CargoEcommerce
{

    public function getAllData()
    {
        return Product::orderBy('id', 'desc')->with('category', 'brand')->get();
    }
}
