<?php

namespace Database\Seeders;

use App\Models\Alumnos;
use App\Models\Carreras;
use App\Models\Deptos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeptosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Deptos::factory(1)->has(
            Carreras::factory(3)->has(
                Alumnos::factory(4)
            )
        )->create();
    }
}
