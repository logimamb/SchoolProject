<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enseignant>
 */
class EnseignantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $genreT = ["F","M"];
        $valeurG = array_rand($genreT,1);
        $genre = $genreT[$valeurG];

        $situationT = ["Marié","Célibataire","Divorcé","Veuf","Veuve"];
        $valeurS = array_rand($situationT,1);
        $situation = $situationT[$valeurS];

        $pieceT = ["CNI","PASSPORT","PERMIS DE CONDUIRE"];
        $valeurT = array_rand($pieceT,1);
        $piece = $pieceT[$valeurT];

        $statutT = ["Permanent","Vacataire","Préstatire"];
        $valeurS = array_rand($statutT,1);
        $statut = $statutT[$valeurS];

        return [
            "nom" => $this->faker->lastName,
            "prenom" => $this->faker->firstName,
            "adresse" => $this->faker->city,
            "sexe" => $genre,
            "situationMatrimoniale" => $situation,
            "nombrEnfant" => rand(1,10),
            "telephone" => $this->faker->phoneNumber,
            "telephone2" => $this->faker->phoneNumber,
            "pieceIdentite" => $piece,
            "numeroPieceIdentite" => $this->faker->biasedNumberBetween,
            "statut" => $statut,
            "email" => $this->faker->email,
            "photo" => $this->faker->imageUrl
        ];
    }
}
