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
            'reviewer_name_en' => $data['reviewer_name_en'],
            'reviewer_designation_en' => $data['reviewer_designation_en'],
            'short_comment_en' => $data['short_comment_en'],
            'long_comment_en' => $data['long_comment_en'],
            'reviewer_name_bn' => $data['reviewer_name_bn'],
            'reviewer_designation_bn' => $data['reviewer_designation_bn'],
            'short_comment_bn' => $data['short_comment_bn'],
            'long_comment_bn' => $data['long_comment_bn'],
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
            'reviewer_name_en' => $data['reviewer_name_en'],
            'reviewer_designation_en' => $data['reviewer_designation_en'],
            'short_comment_en' => $data['short_comment_en'],
            'long_comment_en' => $data['long_comment_en'],
            'reviewer_name_bn' => $data['reviewer_name_bn'],
            'reviewer_designation_bn' => $data['reviewer_designation_bn'],
            'short_comment_bn' => $data['short_comment_bn'],
            'long_comment_bn' => $data['long_comment_bn'],
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
