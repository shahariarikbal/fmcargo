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
        return $testimonial = Testimonial::where('id', $id)->first();
    }

    public function update($data = [], $id = [])
    {
        $testimonial = Testimonial::find($id);

        if(isset($data['reviewer_image'])){
            if ($testimonial->reviewer_image && file_exists(public_path('testimonial/'.$testimonial->reviewer_image))){
                unlink(public_path('testimonial/'.$testimonial->reviewer_image));
            }
            $imgname = mt_rand(10000, 99999). '.' . $data['reviewer_image']->getClientOriginalExtension();
            $data['reviewer_image']->move('testimonial/', $imgname);
        }
        else{
            $imgname = $testimonial->reviewer_image;
        }

        $testimonial->update([
            'reviewer_name' => $data['reviewer_name'],
            'reviewer_designation' => $data['reviewer_designation'],
            'short_comment' => $data['short_comment'],
            'long_comment' => $data['long_comment'],
            'reviewer_image' => $imgname,
        ]);
    }

    public function active($id)
    {

    }

    public function inactive($id)
    {

    }

    public function delete($id)
    {
        $testimonial = Testimonial::find($id);
        if ($testimonial->reviewer_image && file_exists(public_path('testimonial/'.$testimonial->reviewer_image))){
            unlink(public_path('testimonial/'.$testimonial->reviewer_image));
        }

        $testimonial->delete();
    }

}
