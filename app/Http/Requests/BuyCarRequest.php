<?php

namespace App\Http\Requests;

use App\Enums\BuyerType;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class BuyCarRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'car_name' => '',
            'car_model' => '',
            'car_color' => '',
            'car_quality_number' => '',
            'car_brand' => '',
            'car_vin' => 'required|unique:cars,vin,' . $this->id,
            'notes' => '',
            'car_code' => 'min:4|max:4',
            'client_name' => $this->buyer_type == BuyerType::Client->value ? 'required' : '',
            'client_phone' => $this->buyer_type == BuyerType::Client->value ? 'required' : '',
            'lot_number' => 'required',
            'total_price' => 'required',
            'shipping_price' => '',
            'advance_amount' => '',
            'buy_date' => '',
            'arrival_date' => '',
            'buyer_type' => 'required',
            'status' => ''
        ];
    }


}
