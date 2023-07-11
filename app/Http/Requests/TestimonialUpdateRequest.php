<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialUpdateRequest extends FormRequest
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
            'reviewer_name_en' => 'required',
            'reviewer_designation_en' => 'required',
            'short_comment_en' => 'required',
            'long_comment_en' => 'required',
            'reviewer_name_bn' => 'required',
            'reviewer_designation_bn' => 'required',
            'short_comment_bn' => 'required',
            'long_comment_bn' => 'required',
        ];
    }
}
