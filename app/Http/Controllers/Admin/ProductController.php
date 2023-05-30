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

    public function productStore(Request $request)
    {
        try {
            $product = $request->only(['name','sku','cat_id','brand_id','image','gallery_image','price','qty','short_description','long_description']);
            $this->product->store($product);
            $this->setSuccessMessage('Product has been created.');
            return redirect()->route('product.list');
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->route('product.list');
        }
    }

    public function productUpdate(Request $request, $id)
    {
        try {
            // $product = $request->only(['name','sku','cat_id','brand_id','image','gallery_image','price','qty','short_description','long_description']);
            $product = $request->all();
            $this->product->update($product, $id);
            $this->setSuccessMessage('Product has been updated.');
            return redirect()->route('product.list');
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->route('product.list');
        }
    }

    public function productEdit($id)
    {
        $data = [
            'categories' => Category::orderBy('id', 'desc')->select(['id', 'name', 'status'])->where('status', 1)->get(),
            'brands' => Brand::orderBy('id', 'desc')->select(['id', 'name', 'status'])->where('status', 1)->get(),
        ];
        $product = $this->product->edit($id);
        return view('layouts.admin.ecommerce.product.edit', compact('product','data'));
    }

    public function productDelete ($id)
    {
        $product = $this->product->delete($id);
        $this->setSuccessMessage('Product has been deleted.');
        return redirect()->route('product.list');
    }

}
