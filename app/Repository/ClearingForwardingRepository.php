<?php

namespace App\Repository;

use App\Models\ClearingForwarding;
use Illuminate\Support\Str;

class ClearingForwardingRepository implements CargoEcommerce
{
    public function getAllData()
    {
        return ClearingForwarding::first();
    }

    public function store($data = [])
    {
    }

    public function update($data = [], $id = [])
    {
        $blog = Blog::find($id);

        if(isset($data['image'])){
            if ($blog->image && file_exists(public_path('blog/'.$blog->image))){
                unlink(public_path('blog/'.$blog->image));
            }
            $updateImgName = mt_rand(10000, 99999). '.' . $data['image']->getClientOriginalExtension();
            $data['image']->move('blog/', $updateImgName);
        }
        else{
            $updateImgName = $blog->image;
        }

        $blog->update([
            'title_en' => $data['title_en'],
            'title_bn' => $data['title_bn'],
            'slug' => Str::slug($data['title_en']),
            'description_en' => $data['description_en'],
            'description_bn' => $data['description_bn'],
            'image' => $updateImgName,
        ]);
    }

    public function edit($id)
    {
        return $blog = Blog::find($id);
    }

    public function delete($id)
    {
        $blog = Blog::find($id);
        if ($blog->image && file_exists(public_path('blog/'.$blog->image))){
            unlink(public_path('blog/'.$blog->image));
        }
        $blog->delete();
    }

    public function active($id)
    {
        $blog = Blog::find($id);
        $blog->status = false;
        $blog->save();
    }

    public function inactive($id)
    {
        $blog = Blog::find($id);
        $blog->status = true;
        $blog->save();
    }
}
