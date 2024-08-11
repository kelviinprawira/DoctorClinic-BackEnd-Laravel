<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePatientScheduleRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'patient_id' => "required",
            'doctor_id' => "required",
            'schedule_time' => "required",
            'status' => "required",
            'no_antrian' => "required",
            'payment_method' => "required",
            'total_price' => "required",
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
