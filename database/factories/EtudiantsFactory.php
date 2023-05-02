<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Etudiants>
 */
class EtudiantsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $statutT = ["Marié","Célibataire"];
        $valeurS = array_rand($statutT,1);
        $statut = $statutT[$valeurS];

        $genreT = ["H","F"];
        $valeurG = array_rand($genreT,1);
        $genre = $genreT[$valeurG];

        $lienT = ["Père","Mère","Oncle","Tante","Frère","Soeur"];
        $valeurT = array_rand($lienT,1);
        $lien = $lienT[$valeurT];
        return [
            "user_id" => rand(1,10),
            "parcour_id" => rand(1,10),
            "nom" => $this->faker->lastName,
            "prenom" => $this->faker->firstName,
            "dateDeNaissance" => $this->faker->dateTimeBetween("1980-01-01","2001-12-01"),
            "lieuDeNaissance" => $this->faker->city,
            "sexe" => $genre,
            "nationalite" => $this->faker->country,
            "telephone" => $this->faker->phoneNumber,
            "telephone2" => $this->faker->phoneNumber,
            "adresse" => $this->faker->address,
            "nomDuPere" => $this->faker->name,
            "NomDeLaMere" => $this->faker->name,
            "telephoneDeLaMere" => $this->faker->phoneNumber,
            "telephoneDuPere" => $this->faker->phoneNumber,
            "nomDuTuteur" => $this->faker->name,
            "fonctionDuTuteur" => $this->faker->company,
            "lienAvecTuteur" => $lien,
            "situationMatrimoniale" => $statut,
            "photo" => $this->faker->imageUrl,
        ];
    }
}
