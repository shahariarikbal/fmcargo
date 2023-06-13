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
}
