<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutUsUpdateRequest;
use App\Repository\CargoEcommerce;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutUsController extends Controller
{
    protected $about_us;


    public function __construct(CargoEcommerce $cargoEcommerce)
    {
        $this->about_us = $cargoEcommerce;
    }

    public function aboutUsEdit ($id):View
    {
        $about_us = $this->about_us->edit($id);
        return view('layouts.admin.about_us.edit', compact('about_us'));
    }

    public function aboutUsUpdate (AboutUsUpdateRequest $request, $id): \Illuminate\Http\RedirectResponse
    {
        try {
            $about_us = $request->only(['title_en','title_bn', 'description_en','description_bn']);
            $this->about_us->update($about_us, $id);
            $this->setSuccessMessage('About Us has been updated');
            return redirect()->back();
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return  redirect()->back();
        }
    }
}
