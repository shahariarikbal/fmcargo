<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Http\Requests\BlogUpdateRequest;
use App\Models\Blog;
use App\Repository\CargoEcommerce;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    protected $blog;


    public function __construct(CargoEcommerce $cargoEcommerce)
    {
        $this->blog = $cargoEcommerce;
    }

    public function blogList():View
    {
        return view('layouts.admin.blog.index', [
            'blogs' => $this->blog->getAllData()
        ]);
    }

    public function blogAdd():View
    {
        return view('layouts.admin.blog.add');
    }

    public function blogStore(BlogRequest $request): \Illuminate\Http\RedirectResponse
    {
        try {
            $blog = $request->only(['title_en','title_bn', 'description_en','description_bn', 'image']);
            $this->blog->store($blog);
            $this->setSuccessMessage('Blog has been created');
            return redirect()->route('blog.list');
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return  redirect()->back();
        }
    }

    public function blogEdit($id):View
    {
        $blog = $this->blog->edit($id);
        return view('layouts.admin.blog.edit', compact('blog'));
    }

    public function blogUpdate(BlogUpdateRequest $request, $id): \Illuminate\Http\RedirectResponse
    {
        try {
            $blogUpdate = $request->only(['title_en','title_bn', 'description','description_bn', 'image']);
            $this->blog->update($blogUpdate, $id);
            $this->setSuccessMessage('Blog has been updated');
            return redirect()->route('blog.list');
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return  redirect()->back();
        }
    }

    public function blogDelete($id)
    {
        try {
            $this->blog->delete($id);
            $this->setSuccessMessage('Blog has been deleted');
            return redirect()->route('blog.list');
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return  redirect()->back();
        }
    }
}
