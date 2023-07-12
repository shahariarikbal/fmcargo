<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repository\CargoEcommerce;
use Illuminate\Http\Request;
use App\Http\Requests\DoorToDoorRequest;

class DoorToDoorController extends Controller
{
    protected $door_to_door;


    public function __construct(CargoEcommerce $cargoEcommerce)
    {
        $this->door_to_door = $cargoEcommerce;
    }

    public function doorEdit ($id)
    {
        $door_to_door = $this->door_to_door->edit($id);
        return view('layouts.admin.door_to_door.index', compact('door_to_door'));
    }

    public function doorUpdate (DoorToDoorRequest $request, $id)
    {
        try {
            $door_to_door = $request->all();
            $this->door_to_door->update($door_to_door, $id);
            $this->setSuccessMessage('Content has been updated.');
            return redirect()->route('door.edit',$id);
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->route('door.edit',$id);
        }
    }
}
