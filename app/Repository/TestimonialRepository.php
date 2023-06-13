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
        if(isset($data['reviewer_image'])){
            $imageName = mt_rand(10000, 99999). '.' . $data['reviewer_image']->getClientOriginalExtension();
            $data['reviewer_image']->move('testimonial/', $imageName);
        }

        Testimonial::create([
            'reviewer_name' => $data['reviewer_name'],
            'reviewer_designation' => $data['reviewer_designation'],
            'short_comment' => $data['short_comment'],
            'long_comment' => $data['long_comment'],
            'reviewer_image' => $imageName,
        ]);
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
