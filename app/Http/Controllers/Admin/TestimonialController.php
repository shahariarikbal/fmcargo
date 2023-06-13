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
            $testimonial = $request->only(['reviewer_name','reviewer_designation','reviewer_image','short_comment','long_comment']);
            $this->testimonial->store($testimonial);
            $this->setSuccessMessage('Testimonial has been created.');
            return redirect()->route('testimonial.list');
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->back();
        }
    }
}
