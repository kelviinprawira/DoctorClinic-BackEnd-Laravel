<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePatientRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nik' => 'required',
            'kk' => 'required',
            'name' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'birth_place' => 'required',
            'birth_date' => 'required',
            'city' => 'required',
            'address_line' => 'required',
            'city_code' => 'required',
            'province' => 'required',
            'province_code' => 'required',
            'is_deceased' => 'required',
            'district' => 'required',
            'district_code' => 'required',
            'village' => 'required',
            'village_code' => 'required',
            'rt' => 'required',
            'rw' => 'required',
            'postal_code' => 'required',
            'marital_status' => 'required',


        ];
    }
}
