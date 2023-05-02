<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DiplomesEnseignants>
 */
class DiplomesEnseignantsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "enseignant_id" => rand(1,10),
            "diplome_id" => rand(1,10)
        ];
    }
}
