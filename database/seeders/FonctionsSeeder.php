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
            ["nom" => "Préfet de l'ordre"],
            ["nom" => "DAAC"],
            ["nom" => "Directeur général"],
            ["nom" => "Agent de recouvrement"],
            ["nom" => "Agent de sécurité"],
            ["nom" => "Informaticien"],
            ["nom" => "Maintenancier"],
            ["nom" => "Chef du personnel"],
            ["nom" => "Comptable"],
            ["nom" => "Rélation publique"]
        ]);
    }
}
