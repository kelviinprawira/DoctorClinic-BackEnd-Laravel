<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\DoctorSchedule;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\DoctorSchedule::create([
            'doctor_id' => 1,
            'day' => 'Monday',
            'time' => '08:00 - 12:00'
        ]);

        Doctor::all()->each(function ($doctor) {
            DoctorSchedule::factory(3)->create(['doctor_id' => $doctor->id]);
        });
    }
}
