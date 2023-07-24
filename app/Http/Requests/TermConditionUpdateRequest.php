<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TermConditionUpdateRequest extends FormRequest
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
            'title_en' => 'required',
            'title_bn' => 'required',
            'description_en' => 'required',
            'description_bn' => 'required',
        ];
    }
}
