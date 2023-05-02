<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MatiereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("matieres")->insert([
            ["nom"=>"Mathématiques","codeMatiere"=>"Maths","departement_id" => 1],
            ["nom"=>"Technique d'Expression Française","codeMatiere"=>"TEF","departement_id" => 2],
            ["nom"=>"Anglais","codeMatiere"=>"Ang","departement_id" => 6],
            ["nom"=>"Comptabilité","codeMatiere"=>"Compta","departement_id" => 3]
        ]);
    }
}
