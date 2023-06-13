<?php

namespace App\Repository;
use App\Models\Testimonial;
use Illuminate\Support\Str;

class TestimonialRepository implements CargoEcommerce
{

    public function getAllData()
    {
        return Testimonial::orderBy('id', 'desc')->get();
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

    }

    public function inactive($id)
    {

    }

    public function delete($id)
    {

    }

}
