<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRegisterRequest extends FormRequest
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
            'first_name' => 'required|max:191|string',
            'last_name' => 'required|max:191|string',
            'email' => 'required|email|unique:customers,email',
            'phone' => 'required|max:20',
            'password' => 'required|max:20|min:8',
            'avatar' => 'required|image',
        ];
    }
}
