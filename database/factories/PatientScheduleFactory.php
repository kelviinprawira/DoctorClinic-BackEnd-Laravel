<?php

namespace Database\Factories;

use App\Models\PatientSchedule;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientScheduleFactory extends Factory
{
    protected $model = PatientSchedule::class;

    public function definition(): array
    {
        return [
            'patient_id' => 1,
            'doctor_id' => 1,
            'schedule_time' => $this->faker->dateTimeBetween('now', '+1 year'),
            'complaint' => $this->faker->text(),
            'status' => 'waiting',
            'no_antrian' => 1,
            'payment_method' => 'cash',
            'total_price' => 150000
        ];
    }
}
