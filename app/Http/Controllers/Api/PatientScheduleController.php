<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePatientScheduleRequest;
use App\Models\PatientSchedule;
use Database\Seeders\PatientScheduleSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientScheduleController extends Controller
{
    public function index(Request $request)
    {
        $patientsSchedules = PatientSchedule::query()->when($request->input('patient_id'), function ($query, $name) {
            return $query->where('patient_id', 'like', '%' . $name . '%');
        })->orderBy('id', 'desc')->paginate(10);

        return response([
            'data' => $patientsSchedules,
            'message' => 'Success',
            'status' => 'OK'
        ], 200);
    }

    public function store(StorePatientScheduleRequest $request)
    {
        $request->validated();
        $patientSchedule = PatientSchedule::query()->create([
            'patient_id' => $request->patient_id,
            'doctor_id' => $request->doctor_id,
            'schedule_time' => $request->schedule_time,
            'status' => 'waiting',
            'no_antrian' => 1,
        ]);
        return response([
            'data' => $patientSchedule,
            'message' => 'Success',
            'status' => 'OK'
        ], 200);
    }
}
