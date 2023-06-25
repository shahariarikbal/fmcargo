<?php

namespace App\Repository;

use App\Models\Youtube;

class YoutubeVideoRepository implements CargoEcommerce
{
    public function getAllData()
    {
        return Youtube::orderBy('id', 'desc')->get();
    }

    public function store($data = [])
    {
        Youtube::create([
            'youtube' => $data['youtube']
        ]);
    }

    public function update($data = [], $id = [])
    {
        $youtubeUpdate = Youtube::find($id);
        $youtubeUpdate->update([
            'youtube' => $data['youtube']
        ]);
    }

    public function edit($id)
    {
        $youtube = Youtube::find($id);
        return $youtube;
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
        $youtube = Youtube::find($id);
        $youtube->delete();
    }
}
