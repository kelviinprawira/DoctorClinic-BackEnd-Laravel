<?php

namespace Database\Seeders;

use App\Models\PatientSchedule;
use Illuminate\Database\Seeder;

class PatientScheduleSeeder extends Seeder
{
    public function run(): void
    {
        PatientSchedule::factory(20)->create();
    }
}
