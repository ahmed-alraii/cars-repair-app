<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientCarRequest extends FormRequest
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
            'client_name' => 'required|min:3',
            'client_phone' => 'required|min:3',
            'sell_price' => 'required',
            'show_date' => 'required',
            'sell_date' => '',
            'car_name' => 'required|min:3',
            'car_model' => 'required',
            'car_color' => 'required',
            'car_quality_number' => 'required',
            'car_brand' => 'required',
            'car_vin' => 'required|unique:cars,vin,' . $this->id,
            'notes' => '',
            'car_code' => 'required|min:4|max:4'
        ];
    }
}
