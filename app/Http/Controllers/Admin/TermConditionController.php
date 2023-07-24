<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TermConditionUpdateRequest;
use App\Repository\CargoEcommerce;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TermConditionController extends Controller
{
    protected $term_condition;


    public function __construct(CargoEcommerce $cargoEcommerce)
    {
        $this->term_condition = $cargoEcommerce;
    }

    public function termConditionEdit ($id): View
    {
        $term_condition = $this->term_condition->edit($id);
        return view('layouts.admin.term_condition.edit', compact('term_condition'));
    }

    public function termConditionUpdate (TermConditionUpdateRequest $request, $id): \Illuminate\Http\RedirectResponse
    {
        try {
            $term_condition = $request->only(['title_en','title_bn', 'description_en','description_bn']);
            $this->term_condition->update($term_condition, $id);
            $this->setSuccessMessage('Terms & Conditions has been updated');
            return redirect()->back();
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return  redirect()->back();
        }
    }
}
