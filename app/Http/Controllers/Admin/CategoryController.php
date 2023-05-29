<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repository\CargoEcommerce;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $category;

    public function __construct(CargoEcommerce $cargoEcommerce)
    {
        $this->category = $cargoEcommerce;
    }

    public function categoryList(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('layouts.admin.ecommerce.category.index', [
            'categories' => $this->category->getAllData()
        ]);
    }

    public function categoryCreate(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('layouts.admin.ecommerce.category.add');
    }

    public function categoryStore(Request $request)
    {
        try {
            $category = $request->only(['name']);
            $this->category->store($category);
            $this->setSuccessMessage('Category has been created.');
            return redirect()->route('category.list');
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->route('category.list');
        }
    }

    public function categoryUpdate(Request $request, $id)
    {
        try {
            $categoryUpdate = $request->all();
            $this->category->update($categoryUpdate, $id);
            $this->setSuccessMessage('Category has been updated.');
            return redirect()->route('category.list');
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->route('category.list');
        }
    }

    public function categoryEdit($id)
    {
        $category = $this->category->edit($id);
        return view('layouts.admin.ecommerce.category.edit', compact('category'));
    }

    public function categoryActive($id)
    {
        try {
            $category = $this->category->active($id);
            $this->setSuccessMessage('Category has been inactive.');
            return redirect()->route('category.list');
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->route('category.list');
        }
    }

    public function categoryInactive($id)
    {
        try {
            $category = $this->category->inactive($id);
            $this->setSuccessMessage('Category has been active.');
            return redirect()->route('category.list');
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->route('category.list');
        }
    }

    public function categoryDelete($id)
    {
        $category = $this->category->delete($id);
        $this->setSuccessMessage('Category has been deleted.');
        return redirect()->route('category.list');
    }
}
