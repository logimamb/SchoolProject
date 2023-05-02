<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Parcours>
 */
class ParcoursFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $diplomeT = ["BAC","BTS","Licence","Master","Doctorat"];
        $valeurD = array_rand($diplomeT,1);
        $diplome = $diplomeT[$valeurD];

        $serieT = ["A","C","D","F3","F4","F5","S"];
        $valeurT = array_rand($serieT,1);
        $serie = $serieT[$valeurT];

        return [
            "dernierEtablissementFrequente" => $this->faker->name,
            "dernierDiplome" => $diplome,
            "serie" => $serie,
            "dernierEmploi" => $this->faker->company,
            "dateObtentionDiplome" => $this->faker->dateTimeBetween("1985-12-1","2022-12-1")
        ];
    }
}
