<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productList()
    {
        return view('layouts.admin.ecommerce.product.index');
    }

    public function productCreate()
    {
        $data = [
            'categories' => Category::orderBy('id', 'desc')->select(['id', 'name', 'status'])->where('status', 1)->get(),
            'brands' => Brand::orderBy('id', 'desc')->select(['id', 'name', 'status'])->where('status', 1)->get(),
        ];
        return view('layouts.admin.ecommerce.product.add', compact('data'));
    }
}
