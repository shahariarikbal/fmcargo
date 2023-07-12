<?php

namespace App\Repository;

use App\Models\DoorToDoor;
use Illuminate\Support\Str;

class DoorToDoorRepository implements CargoEcommerce
{
    public function getAllData()
    {
        return $door_to_door = DoorToDoor::first();
    }

    public function store($data = [])
    {
    }

    public function update($data = [], $id = [])
    {
        $door_to_door = DoorToDoor::find($id);

        if(isset($data['pro_sourcing_img'])){
            if ($door_to_door->pro_sourcing_img && file_exists(public_path('door_to_door/'.$door_to_door->pro_sourcing_img))){
                unlink(public_path('door_to_door/'.$door_to_door->pro_sourcing_img));
            }
            $imgname_1 = mt_rand(10000, 99999). '.' . $data['pro_sourcing_img']->getClientOriginalExtension();
            $data['pro_sourcing_img']->move('door_to_door/', $imgname_1);
        }
        else{
            $imgname_1 = $door_to_door->pro_sourcing_img;
        }

        if(isset($data['free_warehousing_img'])){
            if ($door_to_door->free_warehousing_img && file_exists(public_path('door_to_door/'.$door_to_door->free_warehousing_img))){
                unlink(public_path('door_to_door/'.$door_to_door->free_warehousing_img));
            }
            $imgname_2 = mt_rand(10000, 99999). '.' . $data['free_warehousing_img']->getClientOriginalExtension();
            $data['free_warehousing_img']->move('door_to_door/', $imgname_2);
        }
        else{
            $imgname_2 = $door_to_door->free_warehousing_img;
        }

        if(isset($data['inspection_img'])){
            if ($door_to_door->inspection_img && file_exists(public_path('door_to_door/'.$door_to_door->inspection_img))){
                unlink(public_path('door_to_door/'.$door_to_door->inspection_img));
            }
            $imgname_3 = mt_rand(10000, 99999). '.' . $data['inspection_img']->getClientOriginalExtension();
            $data['inspection_img']->move('door_to_door/', $imgname_3);
        }
        else{
            $imgname_3 = $door_to_door->inspection_img;
        }

        if(isset($data['repacking_img'])){
            if ($door_to_door->repacking_img && file_exists(public_path('door_to_door/'.$door_to_door->repacking_img))){
                unlink(public_path('door_to_door/'.$door_to_door->repacking_img));
            }
            $imgname_4 = mt_rand(10000, 99999). '.' . $data['repacking_img']->getClientOriginalExtension();
            $data['repacking_img']->move('door_to_door/', $imgname_4);
        }
        else{
            $imgname_4 = $door_to_door->repacking_img;
        }

        if(isset($data['custom_clr_img'])){
            if ($door_to_door->custom_clr_img && file_exists(public_path('door_to_door/'.$door_to_door->custom_clr_img))){
                unlink(public_path('door_to_door/'.$door_to_door->custom_clr_img));
            }
            $imgname_5 = mt_rand(10000, 99999). '.' . $data['custom_clr_img']->getClientOriginalExtension();
            $data['custom_clr_img']->move('door_to_door/', $imgname_5);
        }
        else{
            $imgname_5 = $door_to_door->custom_clr_img;
        }

        if(isset($data['d_step_delivery_img'])){
            if ($door_to_door->d_step_delivery_img && file_exists(public_path('door_to_door/'.$door_to_door->d_step_delivery_img))){
                unlink(public_path('door_to_door/'.$door_to_door->d_step_delivery_img));
            }
            $imgname_6 = mt_rand(10000, 99999). '.' . $data['d_step_delivery_img']->getClientOriginalExtension();
            $data['d_step_delivery_img']->move('door_to_door/', $imgname_6);
        }
        else{
            $imgname_6 = $door_to_door->d_step_delivery_img;
        }

        $door_to_door->update([
            'header_title_en' => $data['header_title_en'],
            'header_title_bn' => $data['header_title_bn'],
            'header_desc_en' => $data['header_desc_en'],
            'header_desc_bn' => $data['header_desc_bn'],
            'pro_sourcing_title_en' => $data['pro_sourcing_title_en'],
            'pro_sourcing_title_bn' => $data['pro_sourcing_title_bn'],
            'pro_sourcing_desc_en' => $data['pro_sourcing_desc_en'],
            'pro_sourcing_desc_bn' => $data['pro_sourcing_desc_bn'],
            'free_warehousing_title_en' => $data['free_warehousing_title_en'],
            'free_warehousing_title_bn' => $data['free_warehousing_title_bn'],
            'free_warehousing_desc_en' => $data['free_warehousing_desc_en'],
            'free_warehousing_desc_bn' => $data['free_warehousing_desc_bn'],
            'inspection_title_en' => $data['inspection_title_en'],
            'inspection_title_bn' => $data['inspection_title_bn'],
            'inspection_desc_en' => $data['inspection_desc_en'],
            'inspection_desc_bn' => $data['inspection_desc_bn'],
            'repacking_title_en' => $data['repacking_title_en'],
            'repacking_title_bn' => $data['repacking_title_bn'],
            'repacking_desc_en' => $data['repacking_desc_en'],
            'repacking_desc_bn' => $data['repacking_desc_bn'],
            'custom_clr_title_en' => $data['custom_clr_title_en'],
            'custom_clr_title_bn' => $data['custom_clr_title_bn'],
            'custom_clr_desc_en' => $data['custom_clr_desc_en'],
            'custom_clr_desc_bn' => $data['custom_clr_desc_bn'],
            'd_step_delivery_title_en' => $data['d_step_delivery_title_en'],
            'd_step_delivery_title_bn' => $data['d_step_delivery_title_bn'],
            'd_step_delivery_desc_en' => $data['d_step_delivery_desc_en'],
            'd_step_delivery_desc_bn' => $data['d_step_delivery_desc_bn'],
            'footer_desc_en' => $data['footer_desc_en'],
            'footer_desc_bn' => $data['footer_desc_bn'],
            'pro_sourcing_img' => $imgname_1,
            'free_warehousing_img' => $imgname_2,
            'inspection_img' => $imgname_3,
            'repacking_img' => $imgname_4,
            'custom_clr_img' => $imgname_5,
            'd_step_delivery_img' => $imgname_6,
        ]);
    }

    public function edit($id)
    {
        return $door_to_door = DoorToDoor::find($id);
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
