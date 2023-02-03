<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use App\Models\Level;
use App\Models\Position;
use App\Models\Salary;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(50)->create();

        // User
        User::create([
            'name' => 'Fariz Ammar',
            'username' => 'Fariz22',
            'email' => 'f.ammarsyq11@gmail.com',
            'password' => bcrypt('farnisa27'),
            'address' => 'Jl. Pembangunan 2 No.10 RT.04/06, Kedung Halang Talang. Kota Bogor',
            'position_id' => '1',
            'level_id' => '1',
            'salary_id' => '3',
            'status' => 'active',
            'remember_token' => Str::random(10)
        ]);

        User::create([
            'name' => 'Ainun Najib',
            'username' => 'Najib02',
            'email' => 'ainunnajib338@gmail.com',
            'password' => bcrypt('123456'),
            'address' => fake()->address(),
            'position_id' => '1',
            'level_id' => '1',
            'salary_id' => '3',
            'status' => 'active',
            'remember_token' => Str::random(10)
        ]);

        // Level
        Level::create([
            'name' => 'Administrator'
        ]);
        Level::create([
            'name' => 'Employee'
        ]);


        // Position
        Position::create([
            'name' => 'Developer'
        ]);
        Position::create([
            'name' => 'Analyst Programmer'
        ]);
        Position::create([
            'name' => 'Admin'
        ]);
        Position::create([
            'name' => 'Director'
        ]);
        Position::create([
            'name' => 'Project Manager'
        ]);

        // Salary
        Salary::create([
            'ammount' => '3.500.000',
            'currency' => 'idr'
        ]);

        Salary::create([
            'ammount' => '4.500.000',
            'currency' => 'idr'
        ]);

        Salary::create([
            'ammount' => '5.500.000',
            'currency' => 'idr'
        ]);
    }
}
