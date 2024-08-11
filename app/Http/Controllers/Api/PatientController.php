<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePatientRequest;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    public function index(Request $request)
    {
        $patients = DB::table('patients')->when($request->input('nik'), function ($query, $name) {
            return $query->where('nik', 'like', '%' . $name . '%');
        })->orderBy('id', 'desc')->get();

        return response([
            'data' => $patients,
            'message' => 'Success',
            'status' => 'OK'
        ], 200);
    }

    //    store
    public function store(StorePatientRequest $request)
    {
        
        $patients = Patient::create($request->all());
        return response([
           'data' => $patients,
            'message' => 'Success',
        ],200);

    }
}

