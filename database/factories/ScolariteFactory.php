<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Scolarite>
 */
class ScolariteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $diplomeT = ["BAC","BET","BTS"];
        $diplomeV = array_rand($diplomeT,1);
        $diplome = $diplomeT[$diplomeV];
        return [
            "diplomEntree" => $diplome,
            "anneeOptionDiplome" => $this->faker->dateTimeBetween("1985-10-1","2006-12-1"),
            "dernierNiveau" => $diplome,
            "dernierEtablissementFrequente" => $this->faker->city,
            "canalInformer" => $this->faker->lastName,
            "serie" => $this->faker->country
        ];
    }
}
