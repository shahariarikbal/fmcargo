<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TestimonialRequest;
use App\Http\Requests\TestimonialUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Repository\CargoEcommerce;

class TestimonialController extends Controller
{
    protected $testimonial;


    public function __construct(CargoEcommerce $cargoEcommerce)
    {
        $this->testimonial = $cargoEcommerce;
    }

    public function testimonialList ()
    {
        return view('layouts.admin.testimonial.index', [
            'testimonials' => $this->testimonial->getAllData()
        ]);
    }

    public function testimonialAdd ()
    {
        return view('layouts.admin.testimonial.add');
    }

    public function testimonialStore (Request $request)
    {
        try {
            $testimonial = $request->only(['reviewer_name_en','reviewer_designation_en','reviewer_image','short_comment_en','long_comment_en','reviewer_name_bn','reviewer_designation_bn','short_comment_bn','long_comment_bn',]);
            $this->testimonial->store($testimonial);
            $this->setSuccessMessage('Testimonial has been created.');
            return redirect()->route('testimonial.list');
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->back();
        }
    }

    public function testimonialEdit ($id)
    {
        $testimonial = $this->testimonial->edit($id);
        return view('layouts.admin.testimonial.edit', compact('testimonial'));
    }

    public function testimonialUpdate (TestimonialUpdateRequest $request, $id)
    {
        try {
            $testimonial = $request->all();
            $this->testimonial->update($testimonial, $id);
            $this->setSuccessMessage('Testimonial has been updated.');
            return redirect()->route('testimonial.list');
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->back();
        }
    }

    public function testimonialDelete ($id)
    {
        $testimonial = $this->testimonial->delete($id);
        $this->setSuccessMessage('Testimonial has been deleted.');
        return redirect()->route('testimonial.list');
    }
}
