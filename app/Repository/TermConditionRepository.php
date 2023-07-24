<?php

namespace App\Repository;

use App\Models\TermCondition;

class TermConditionRepository implements CargoEcommerce
{
    public function getAllData()
    {

    }

    public function store($data = [])
    {
    }

    public function update($data = [], $id = [])
    {
        $term_condition = TermCondition::find($id);

        $term_condition->update([
            'title_en' => $data['title_en'],
            'title_bn' => $data['title_bn'],
            'description_en' => $data['description_en'],
            'description_bn' => $data['description_bn'],
        ]);
    }

    public function edit($id)
    {
        return $term_condition = TermCondition::find($id);
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
