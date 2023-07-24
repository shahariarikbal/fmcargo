<?php

namespace App\Repository;

use App\Models\AboutUs;

class AboutUsRepository implements CargoEcommerce
{
    public function getAllData()
    {

    }

    public function store($data = [])
    {
    }

    public function update($data = [], $id = [])
    {
        $about_us = AboutUs::find($id);

        $about_us->update([
            'title_en' => $data['title_en'],
            'title_bn' => $data['title_bn'],
            'description_en' => $data['description_en'],
            'description_bn' => $data['description_bn'],
        ]);
    }

    public function edit($id)
    {
        return $about_us = AboutUs::find($id);
    }

    public function delete($id)
    {
    }

    public function active($id)
    {
    }

    public function inactive($id)
    {
    }
}
