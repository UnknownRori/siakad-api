<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SemesterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Semester::create([
            'name' => 'Satu'
        ]);

        Semester::create([
            'name' => 'Dua'
        ]);

        Semester::create([
            'name' => 'Tiga'
        ]);

        Semester::create([
            'name' => 'Empat'
        ]);

        Semester::create([
            'name' => 'Lima'
        ]);

        Semester::create([
            'name' => 'Enam'
        ]);

        Semester::create([
            'name' => 'Tujuh'
        ]);
    }
}
