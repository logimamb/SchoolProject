<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $pieceT = ["CNI","PERMIS DE CONDUIRE","PASSPORT"];
        $valeurP = array_rand($pieceT,1);
        $piece = $pieceT[$valeurP];
        
        $genreT = ["F","M"];
        $valeurG = array_rand($genreT,1);
        $genre = $genreT[$valeurG];

        $situationT = ["Marié","Célibataire","Divorcé","Veuf","Veuve"];
        $valeurS = array_rand($situationT,1);
        $situation = $situationT[$valeurS];

        $niveauT = ["Primaire","Sécondaire","Universitaire"];
        $valeurN = array_rand($niveauT,1);
        $niveau = $niveauT[$valeurN];
        
        return [
            "service_id" => rand(1,9),
            "fonction_id" => rand(1,10),
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            "sexe" => $genre,
            "telephone" => $this->faker->phoneNumber,
            "telephone2" => $this->faker->phoneNumber,
            "adresse" => $this->faker->city,
            "situationMatrimoniale" => $situation,
            "nombrEnfant" => array_rand([1,15],1),
            "pieceIdentite" => $piece,
            "numeroPieceIdentite" => $this->faker->swiftBicNumber,
            "niveauEtude" => $niveau,
            "email" => $this->faker->email,
            "photo" => $this->faker->imageUrl,
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
