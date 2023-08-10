<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BillTypeRequest extends FormRequest
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
            'name_ar' => 'required|min:3|regex:/^[\p{Arabic} ]+$/u',
            'name_en' => 'required|min:3|regex:/^[a-z A-Z ]+$/u',
        ];
    }
}