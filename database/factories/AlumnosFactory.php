<?php

namespace Database\Factories;

use App\Models\Carreras;
use Illuminate\Database\Eloquent\Factories\Factory;

use function PHPSTORM_META\map;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumnos>
 */
class AlumnosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "noctrl"=>fake()->unique()->bothify("########"),
            "nombre"=>fake()->name(),
            "apellidop"=>fake()->lastName(),
            "apellidom"=>fake()->lastName(),
            "sexo"=>fake()->randomElement(["M","F"]),
            "email"=>fake()->email(),
            "carreras_id"=>Carreras::factory()
        ];
    }
}
