<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContainerRequest extends FormRequest
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
            'bill_number' => 'required|unique:containers,bill_number,' . $this->id,
            'arrival_date' => 'required',
            'notes' => 'required',
        ];
    }
}
