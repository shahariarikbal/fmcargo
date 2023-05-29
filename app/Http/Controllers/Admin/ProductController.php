<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repository\CargoEcommerce;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $product;

    public function __construct(CargoEcommerce $cargoEcommerce)
    {
        $this->product = $cargoEcommerce;
    }

    public function productList(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        // dd($this->product->getAllData());
        return view('layouts.admin.ecommerce.product.index', [
            'products' => $this->product->getAllData()
        ]);
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
