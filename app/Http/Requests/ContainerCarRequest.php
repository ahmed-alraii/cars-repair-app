<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContainerCarRequest extends FormRequest
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
            'container_name' => 'required|min:3',
            'container_number' => 'required',
            'bill_number' => 'required',
            'arrival_date' => 'required',
            'container_notes' => 'required',

            'name' => 'required|min:3',
            'model' => 'required',
            'color' => 'required',
            'quality_number' => 'required',
            'brand' => 'required',
            'vin' => 'required',
            'car_notes' => 'required',
        ];
    }
}