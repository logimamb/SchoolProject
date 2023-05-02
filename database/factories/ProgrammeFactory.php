<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Programme>
 */
class ProgrammeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $uniteT = ["Comptabilité","Langage","Programmation","Informatique"];
        $valeurU = array_rand($uniteT,1);
        $unite = $uniteT[$valeurU];
        
        return [
            "filiere_id" => rand(1,19),
            "semestre_id" => rand(1,6),
            "matiere_id" => rand(1,4),
            "enseignant_id" => rand(1,10),
            "volumeHoraire" => rand(2,4),
            "UnitEnseignement" => $unite,
            "coefficient" => rand(1,4)
        ];
    }
}
