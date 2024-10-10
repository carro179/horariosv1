<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PuestoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tipos = array('Docente', 'Director', 'Administrativo');
        return [
            "idPuesto" => fake()->randomDigit(),
            "nombre" => fake()->jobtitle(),
            "tipo" => fake()->randomElement($tipos)
        ];
    }
}
