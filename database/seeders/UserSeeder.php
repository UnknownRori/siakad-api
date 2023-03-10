<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Todo : Make service to generate student_code and lecturer_id
        for ($i = 0; $i < 4; $i++) {
            User::factory()->create([
                'student_code' => Str::random(10),
            ]);
        }

        User::factory()->create([
            'lecturer_code' => Str::random(10),
            'role' => Role::Lecturer,
        ]);

        User::factory()->create([
            'role' => Role::Supervisor
        ]);

        User::create([
            "name" => "UnknownRori",
            "email" => "UnknownRori@mail.test",
            "password" => "UnknownRori",
            "role" => Role::Admin,
        ]);
    }
}
