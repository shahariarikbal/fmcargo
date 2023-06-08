<?php

namespace App\Repository;

use App\Models\Service;

class ServiceRepository implements CargoEcommerce
{
    public function getAllData()
    {
        return Service::orderBy('id', 'desc')->select(['id', 'title', 'image'])->get();
    }

    public function store($data = [])
    {
        if ($data['image']){
            $imageName = time().'.'.$data['image']->extension();
            $data['image']->move('/service/', $imageName);
        }

        Service::create([
            'title' => $data['title'],
            'image' => $imageName,
        ]);
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
    }

    public function update($id = [], $data = [])
    {
        // TODO: Implement update() method.
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
        // TODO: Implement delete() method.
    }
}
