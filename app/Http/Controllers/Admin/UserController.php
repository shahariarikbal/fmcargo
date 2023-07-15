<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\DoorToDoor;
use App\Models\Slider;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function customerList()
    {
        $customers = Customer::orderBy('id', 'desc')->get();
        return view('layouts.admin.customer.list', compact('customers'));
    }

    public function customerDelete($id)
    {
        $customerDelete = Customer::find($id);
        $customerDelete->delete();
        $this->setSuccessMessage('Customer has been permanently deleted.');
        return redirect()->back();
    }

    //Slider section
    public function sliderCreate()
    {
        $page = 'create';
        $data = '';
        return view('layouts.admin.settings.sliders', compact('page', 'data'));
    }

    public function sliders()
    {
        $page = 'index';
        $data = Slider::orderBy('id', 'desc')->get();
        return view('layouts.admin.settings.sliders', compact('page', 'data'));
    }

    public function sliderStore(Request $request)
    {
        $this->validate($request, [
            'title_en' => 'required',
            'title_bn' => 'required',
            'image' => 'required',
        ]);

        try {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move('slider/', $imageName);

            Slider::create([
                'title_en' => $request->title_en,
                'title_bn' => $request->title_bn,
                'image' => $imageName,
            ]);

            $this->setSuccessMessage('Slider has been created.');
            return redirect()->back();
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->back();
        }
    }

    public function sliderEdit($id)
    {
        $page = 'edit';
        $data = '';
        $slider = Slider::find($id);
        return view('layouts.admin.settings.sliders', compact('page', 'data', 'slider'));
    }

    public function sliderUpdate(Request $request, $id)
    {
        $this->validate($request, [
            'title_bn' => 'required',
            'title_en' => 'required',
        ]);

        try {
            $slider = Slider::find($id);
            if ($request->hasFile('image')){
                if ($request->image && public_path('slider/', $slider->image)){
                    unlink(public_path('slider/', $slider->image));
                }
                $imageUpdateName = time() . '.' . $request->image->extension();
                $request->image->move('slider/', $imageUpdateName);
                $slider->image = $imageUpdateName;
            }

            $slider->update([
                'title_en' => $request->title_en,
                'title_bn' => $request->title_bn,
            ]);

            $this->setSuccessMessage('Slider has been updated.');
            return redirect()->back();
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return redirect()->back();
        }
    }

    public function sliderDelete($id)
    {
        $sliderDelete = Slider::find($id);
        $sliderDelete->delete();
        $this->setSuccessMessage('Slider has been deleted.');
        return redirect()->back();
    }
}
