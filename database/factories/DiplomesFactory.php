<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Diplomes>
 */
class DiplomesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $diplomeT = ["CEP","BEPC","BAC","BTS","Licence","Master","Doctorat"];
        $valeurD = array_rand($diplomeT,1);
        $diplome = $diplomeT[$valeurD];

        return [
            "nom" => $diplome,
            "referenceDiplome" => $this->faker->buildingNumber,
            "paysObtentionDiplome" => $this->faker->country,
            "villeObtentionDiplome" => $this->faker->city,
            "ecoleObtentionDiplome" => $this->faker->name,
            "dateObtentionDiplome" => $this->faker->dateTimeBetween("1985-12-1","2022-12-1")
        ];
    }
}
