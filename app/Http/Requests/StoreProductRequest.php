<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'name_en' => 'required',
            'name_bn' => 'required',
            'price_bn' => 'required',
            'short_description_bn' => 'required',
            'long_description_bn' => 'required',
            'sku' => 'required',
            'cat_id' => 'required',
            'brand_id' => 'required',
            'short_description_en' => 'required',
            'long_description_en' => 'required',
            'qty_en' => 'required',
            'qty_bn' => 'required',
            'price_en' => 'required',
            'gallery_image' => 'required',
            'image' => 'required',
            'name_bn' => 'required',
        ];
    }
}
