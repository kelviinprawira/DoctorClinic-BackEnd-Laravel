<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PatientController extends Controller
{
    //index
    public function index(Request $request)
    {
        $patients = DB::table('patients')->when($request->input('nik'), function ($query, $nik) {
            return $query->where('nik', 'like', '%' . $nik . '%');
        })
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('pages.patients.index', compact('patients'));
    }
}
