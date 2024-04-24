<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\ProfileClinic;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//        \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@mail.com',
            'role' => 'admin',
            'password' => Hash::make('secret'),
            'phone' => '082234878785'
        ]);

        ProfileClinic::factory()->create([
            'name' => 'Clinic',
            'address' => 'Jl. Jendral Sudirman No. 1',
            'email' => 'admin@mail.com',
            'phone' => '082234878785',
            'doctor_name' => 'Dr. Kelvin',
            'unique_code' => '1234567890',

        ]);

        // \App\Models\User::factory(10)->create([
        //     'name' => 'super developer',
        //     'email' => 'kelvinfic15@gmail.com',
        //     'role' => 'admin',
        //     'password' => Hash::make('password'),
        //     'phone' => '082234878785'
        // ]);

        $this->call([
           DoctorSeeder::class,
           DoctorScheduleSeeder::class,
           PatientSeeder::class
        ]);
    }
}
