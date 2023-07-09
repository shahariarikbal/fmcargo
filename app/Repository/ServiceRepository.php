<?php

namespace App\Repository;

use App\Models\Service;

class ServiceRepository implements CargoEcommerce
{
    public function getAllData()
    {
        return Service::orderBy('id', 'desc')->select(['id', 'title_en', 'image'])->get();
    }

    public function store($data = [])
    {
        if(isset($data['image'])){
            $imageName = mt_rand(10000, 99999). '.' . $data['image']->getClientOriginalExtension();
            $data['image']->move('service/', $imageName);
        }

        Service::create([
            'title_en' => $data['title_en'],
            'title_bn' => $data['title_bn'],
            'image' => $imageName,
        ]);
    }

    public function edit($id)
    {
        return $service = Service::where('id', $id)->first();
    }

    public function update($data = [], $id = [])
    {
        $service = Service::find($id);
        if(isset($data['image'])){
            if ($service->image && file_exists(public_path('service/'.$service->image))){
                unlink(public_path('service/'.$service->image));
            }
            $imgname = mt_rand(10000, 99999). '.' . $data['image']->getClientOriginalExtension();
            $data['image']->move('service/', $imgname);
        }
        else{
            $imgname = $service->image;
        }

        $service->update([
            'title_en' => $data['title_en'],
            'title_bn' => $data['title_bn'],
            'image' => $imgname,
        ]);
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
        $service = Service::find($id);
        if ($service->image && file_exists(public_path('service/'.$service->image))){
            unlink(public_path('service/'.$service->image));
        }
        $service->delete();
    }
}
