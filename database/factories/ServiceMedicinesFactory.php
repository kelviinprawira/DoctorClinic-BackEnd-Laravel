<?php

namespace Database\Factories;

use App\Models\ServiceMedicines;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ServiceMedicines>
 */
class ServiceMedicinesFactory extends Factory
{
    protected $model = ServiceMedicines::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->randomFloat(2, 0, 9999.99),
            'quantity' => $this->faker->numberBetween(1, 10),
            'category' => $this->faker->randomElement(['medicine', 'consultation','treatment']),
        ];
    }
}
