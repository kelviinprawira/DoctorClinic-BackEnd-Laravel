<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
{
    protected $model = Doctor::class;

    public function definition()
    {
        return [
            'doctor_name' => $this->faker->name(),
            'doctor_specialist' => $this->faker->word(),
            'doctor_phone' => $this->faker->phoneNumber(),
            'doctor_email' => $this->faker->email(),
            'doctor_address' => $this->faker->address(),
            'sip' => $this->faker->numberBetween(1000, 9999),
        ];
    }
}
