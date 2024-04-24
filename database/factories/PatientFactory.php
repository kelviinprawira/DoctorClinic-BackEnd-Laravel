<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nik' => $this->faker->numberBetween(1000000000, 9999999999),
            'kk' => $this->faker->numberBetween(1000000000, 9999999999),
            'name' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->email(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'birth_place' => $this->faker->city(),
            'birth_date' => $this->faker->date(),
            'is_deceased' => $this->faker->boolean(),
            'address_line' => $this->faker->address(),
            'city' => $this->faker->city(),
            'city_code' => $this->faker->numberBetween(1000,9999),
            'province' => $this->faker->city(),
            'province_code' => $this->faker->numberBetween(1000,9999),
            'district' => $this->faker->city(),
            'district_code' => $this->faker->numberBetween(1000,9999),
            'village' => $this->faker->city(),
            'village_code' => $this->faker->numberBetween(1000,9999),
            'postal_code' => $this->faker->postcode(),
            'marital_status' => $this->faker->randomElement(['married', 'single']),
            'relationship_name' => $this->faker->name(),
            'rt' => $this->faker->numberBetween(1,99),
            'rw' => $this->faker->numberBetween(1,99),
            'relationship_phone' => $this->faker->phoneNumber(),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
        ];
    }
}
