<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PrivacyPolicyUpdateRequest;
use App\Repository\CargoEcommerce;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PrivacyPolicyController extends Controller
{
    protected $privacy_policy;


    public function __construct(CargoEcommerce $cargoEcommerce)
    {
        $this->privacy_policy = $cargoEcommerce;
    }

    public function privacyPolicyEdit ($id): View
    {
        $privacy_policy = $this->privacy_policy->edit($id);
        return view('layouts.admin.privacy_policy.edit', compact('privacy_policy'));
    }

    public function privacyPolicyUpdate (PrivacyPolicyUpdateRequest $request, $id): \Illuminate\Http\RedirectResponse
    {
        try {
            $privacy_policy = $request->only(['title_en','title_bn', 'description_en','description_bn']);
            $this->privacy_policy->update($privacy_policy, $id);
            $this->setSuccessMessage('Privacy Policy has been updated');
            return redirect()->back();
        }catch (\Exception $exception){
            $this->setErrorMessage($exception->getMessage());
            return  redirect()->back();
        }
    }
}
