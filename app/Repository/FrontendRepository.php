<?php

namespace App\Repository;

use App\Models\Service;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\Youtube;

class FrontendRepository implements CargoEcommerce
{
    public function getAllData()
    {
        $data = [
            'services' => Service::orderBy('id', 'desc')->select(['id', 'title', 'image'])->get(),
            'products' => Product::orderBy('id', 'desc')->get(),
            'testimonials' => Testimonial::orderBy('id', 'desc')->get(),
            'sliders' => Slider::orderBy('id', 'desc')->get(),
            'youtubes' => Youtube::orderBy('id', 'desc')->get(),
        ];

        return $data;
    }

    public function store($data = [])
    {

    }

    public function edit($id)
    {

    }

    public function update($data = [], $id = [])
    {

    }

    public function active($id)
    {
        // TODO: Implement active() method.
    }

    public function inactive($id)
    {
        // TODO: Implement inactive() method.
    }

    public function delete($id)
    {

    }
}
