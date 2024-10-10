<?php

namespace Database\Factories;

use App\Models\Deptos;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carreras>
 */
class CarrerasFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $titulo=fake()->unique()->jobTitle();
        return [
            "idcarrera"=>fake()->unique()->bothify("???####"),
            "nombrecarrera"=>$titulo,
            "nombremediano"=>fake()->lexify(str_repeat("?",15)),
            "nombrecorto"=>substr($titulo,0,5),
            "deptos_id"=>Deptos::factory(),

        ];
    }
}
