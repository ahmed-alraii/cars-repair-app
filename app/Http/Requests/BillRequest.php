<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BillRequest extends FormRequest
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
            'car_id'  => 'required',
            'bill_type_id'  => 'required',
            'price'  => 'required',
            'notes'  => 'required',
            'company_name'  => 'required',
            'company_phone'  => 'required'
        ];
    }
}
