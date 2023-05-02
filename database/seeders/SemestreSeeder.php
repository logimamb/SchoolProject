<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SemestreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("semestres")->insert([
            ["nom"=> "Semestre 1","codeSemestre" => "S1","niveau_id"=>1],
            ["nom"=> "Semestre 2","codeSemestre" => "S2","niveau_id"=>1],
            ["nom"=> "Semestre 3","codeSemestre" => "S3","niveau_id"=>2],
            ["nom"=> "Semestre 4","codeSemestre" => "S4","niveau_id"=>2],
            ["nom"=> "Semestre 5","codeSemestre" => "S5","niveau_id"=>3],
            ["nom"=> "Semestre 6","codeSemestre" => "S6","niveau_id"=>3]
        ]);
    }
}
