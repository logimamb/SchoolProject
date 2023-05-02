<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FonctionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("fonctions")->insert([
            ["nom" => "Préfet de l'ordre","service_id" => 5],
            ["nom" => "DAAC","service_id" => 5],
            ["nom" => "Directeur général","service_id" => 9],
            ["nom" => "Agent de recouvrement","service_id" => 3],
            ["nom" => "Agent de sécurité","service_id" => 4],
            ["nom" => "Informaticien","service_id" => 2],
            ["nom" => "Maintenancier","service_id" => 8],
            ["nom" => "Chef du personnel","service_id" => 9],
            ["nom" => "Rélation publique","service_id" => 9]
        ]);
    }
}
