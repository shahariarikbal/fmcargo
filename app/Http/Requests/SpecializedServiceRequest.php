<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SpecializedServiceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'header_title_en' => 'required',
            'header_title_bn' => 'required',
            'header_desc_en' => 'required',
            'header_desc_bn' => 'required',
            'pro_sourcing_title_en' => 'required',
            'pro_sourcing_title_bn' => 'required',
            'pro_sourcing_desc_en' => 'required',
            'pro_sourcing_desc_bn' => 'required',
            'free_warehousing_title_en' => 'required',
            'free_warehousing_title_bn' => 'required',
            'free_warehousing_desc_en' => 'required',
            'free_warehousing_desc_bn' => 'required',
            'inspection_title_en' => 'required',
            'inspection_title_bn' => 'required',
            'inspection_desc_en' => 'required',
            'inspection_desc_bn' => 'required',
            'repacking_title_en' => 'required',
            'repacking_title_bn' => 'required',
            'repacking_desc_en' => 'required',
            'repacking_desc_bn' => 'required',
            'custom_clr_title_en' => 'required',
            'custom_clr_title_bn' => 'required',
            'custom_clr_desc_en' => 'required',
            'custom_clr_desc_bn' => 'required',
            'd_step_delivery_title_en' => 'required',
            'd_step_delivery_title_bn' => 'required',
            'd_step_delivery_desc_en' => 'required',
            'd_step_delivery_desc_bn' => 'required',
            'footer_desc_en' => 'required',
            'footer_desc_bn' => 'required',
        ];
    }
}
