<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repository\CargoEcommerce;
use Illuminate\Http\Request;

class YoutubeController extends Controller
{
    protected $youtube;
    public function __construct(CargoEcommerce $cargoEcommerce)
    {
        $this->youtube = $cargoEcommerce;
    }

    public function youtubeList()
    {
        $page = 'index';
        $youtubeLinks = $this->youtube->getAllData();
        return view('layouts.admin.settings.youtube', compact('page', 'youtubeLinks'));
    }

    public function youtubeCreate()
    {
        $page = 'create';
        $youtubeLinks = '';
        return view('layouts.admin.settings.youtube', compact('page', 'youtubeLinks'));
    }

    public function youtubeEdit($id)
    {
        $page = 'edit';
        $youtube = $this->youtube->edit($id);
        return view('layouts.admin.settings.youtube', compact('page', 'youtube'));
    }

    public function youtubeStore(Request $request)
    {
        $this->validate($request, [
            'youtube' => 'required'
        ]);
        try {
            $youtube = $request->only(['youtube']);
            $this->youtube->store($youtube);
            $this->setSuccessMessage('Youtube has been created');
            return redirect()->route('youtube.list');
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return  redirect()->back();
        }

    }

    public function youtubeUpdate(Request $request, $id)
    {
        $this->validate($request, [
            'youtube' => 'required'
        ]);
        try {
            $youtube = $request->only(['youtube']);
            $this->youtube->update($youtube, $id);
            $this->setSuccessMessage('Youtube has been update');
            return redirect()->route('youtube.list');
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return  redirect()->back();
        }
    }

    public function youtubeDelete($id)
    {
        try {
            $this->youtube->delete($id);
            $this->setSuccessMessage('Youtube has been deleted');
            return redirect()->route('youtube.list');
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return  redirect()->back();
        }
    }
}
