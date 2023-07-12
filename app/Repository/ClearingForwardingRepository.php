<?php

namespace App\Repository;

use App\Models\ClearingForwarding;
use Illuminate\Support\Str;

class ClearingForwardingRepository implements CargoEcommerce
{
    public function getAllData()
    {
        return $clearForwarding = ClearingForwarding::first();
    }

    public function store($data = [])
    {
    }

    public function update($data = [], $id = [])
    {
        $clearing_forwrding = ClearingForwarding::find($id);

        if(isset($data['pro_sourcing_img'])){
            if ($clearing_forwrding->pro_sourcing_img && file_exists(public_path('clearing_forwrding/'.$clearing_forwrding->pro_sourcing_img))){
                unlink(public_path('clearing_forwrding/'.$clearing_forwrding->pro_sourcing_img));
            }
            $imgname_1 = mt_rand(10000, 99999). '.' . $data['pro_sourcing_img']->getClientOriginalExtension();
            $data['pro_sourcing_img']->move('clearing_forwrding/', $imgname_1);
        }
        else{
            $imgname_1 = $clearing_forwrding->pro_sourcing_img;
        }

        if(isset($data['free_warehousing_img'])){
            if ($clearing_forwrding->free_warehousing_img && file_exists(public_path('clearing_forwrding/'.$clearing_forwrding->free_warehousing_img))){
                unlink(public_path('clearing_forwrding/'.$clearing_forwrding->free_warehousing_img));
            }
            $imgname_2 = mt_rand(10000, 99999). '.' . $data['free_warehousing_img']->getClientOriginalExtension();
            $data['free_warehousing_img']->move('clearing_forwrding/', $imgname_2);
        }
        else{
            $imgname_2 = $clearing_forwrding->free_warehousing_img;
        }

        if(isset($data['inspection_img'])){
            if ($clearing_forwrding->inspection_img && file_exists(public_path('clearing_forwrding/'.$clearing_forwrding->inspection_img))){
                unlink(public_path('clearing_forwrding/'.$clearing_forwrding->inspection_img));
            }
            $imgname_3 = mt_rand(10000, 99999). '.' . $data['inspection_img']->getClientOriginalExtension();
            $data['inspection_img']->move('clearing_forwrding/', $imgname_3);
        }
        else{
            $imgname_3 = $clearing_forwrding->inspection_img;
        }

        if(isset($data['repacking_img'])){
            if ($clearing_forwrding->repacking_img && file_exists(public_path('clearing_forwrding/'.$clearing_forwrding->repacking_img))){
                unlink(public_path('clearing_forwrding/'.$clearing_forwrding->repacking_img));
            }
            $imgname_4 = mt_rand(10000, 99999). '.' . $data['repacking_img']->getClientOriginalExtension();
            $data['repacking_img']->move('clearing_forwrding/', $imgname_4);
        }
        else{
            $imgname_4 = $clearing_forwrding->repacking_img;
        }

        if(isset($data['custom_clr_img'])){
            if ($clearing_forwrding->custom_clr_img && file_exists(public_path('clearing_forwrding/'.$clearing_forwrding->custom_clr_img))){
                unlink(public_path('clearing_forwrding/'.$clearing_forwrding->custom_clr_img));
            }
            $imgname_5 = mt_rand(10000, 99999). '.' . $data['custom_clr_img']->getClientOriginalExtension();
            $data['custom_clr_img']->move('clearing_forwrding/', $imgname_5);
        }
        else{
            $imgname_5 = $clearing_forwrding->custom_clr_img;
        }

        if(isset($data['d_step_delivery_img'])){
            if ($clearing_forwrding->d_step_delivery_img && file_exists(public_path('clearing_forwrding/'.$clearing_forwrding->d_step_delivery_img))){
                unlink(public_path('clearing_forwrding/'.$clearing_forwrding->d_step_delivery_img));
            }
            $imgname_6 = mt_rand(10000, 99999). '.' . $data['d_step_delivery_img']->getClientOriginalExtension();
            $data['d_step_delivery_img']->move('clearing_forwrding/', $imgname_6);
        }
        else{
            $imgname_6 = $clearing_forwrding->d_step_delivery_img;
        }
    }

    public function edit($id)
    {
        return $clearForwarding = ClearingForwarding::find($id);
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
