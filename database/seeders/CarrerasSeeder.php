<?php

namespace Database\Seeders;

use App\Models\Carreras;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarrerasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Carreras::factory(10)->create();
    }
}
