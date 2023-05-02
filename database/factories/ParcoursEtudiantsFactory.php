<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ParcoursEtudiants>
 */
class ParcoursEtudiantsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "parcours_id" => rand(1,10),
            "etudiant_id" => rand(1,10)
        ];
    }
}
