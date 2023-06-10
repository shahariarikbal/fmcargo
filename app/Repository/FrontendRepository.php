<?php

namespace App\Repository;

use App\Models\Service;

class FrontendRepository implements CargoEcommerce
{
    public function getAllData()
    {
        $data = [
            'services' => Service::orderBy('id', 'desc')->select(['id', 'title', 'image'])->get(),
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
